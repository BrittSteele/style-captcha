<?php
echo	"<link rel='stylesheet' href='stylecaptchacss.css' type='text/css' />";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'stylecaptchafunctions.php';

$captchastring = scfgeneratecaptchastring();
//echo $captchastring;
$captchatoken = scfsalt($captchastring);
$_SESSION['scfcaptchastring'] = $captchatoken;
echo $captchatoken;
echo $_SESSION['scfcaptchastring'];
$captchacoordsarray = scfgetcoords($captchastring);
//var_dump($captchacoordsarray);
$ticker = 0;
$backcolorraw = rand(0,999999);
$backcalccolor = str_pad($backcolorraw, 6, 0, STR_PAD_LEFT);

echo "<div class='classscfcontainer'><div id='stylecaptchabox' style='background-color:#".$backcalccolor.";' class='classstylecaptchabox'>";//<table style='width:100%;height:100%;'><tr>";
foreach ($captchacoordsarray as $singlecaptcha)
{

$colorraw = $backcolorraw;
while ($backcolorraw == $colorraw) {
$colorraw = rand(0,999999);
$calccolor = str_pad($colorraw, 6, 0, STR_PAD_LEFT);

}
	foreach ($singlecaptcha as $singlecaptchachr)
	{

echo "<div class='classcaptchachr' id='captchachr".$ticker."' ";

$calcxpos = ((($singlecaptchachr['xpos1'] * 100)*(.127)) + (($ticker) *.145*100));
$calcx2pos = ((($singlecaptchachr['xpos2'] * 100)*(.127)) + (($ticker) *.145*100));
$calcx3pos = ((($singlecaptchachr['xpos3'] * 100)*(.127)) + (($ticker) *.145*100));
$calcx4pos = ((($singlecaptchachr['xpos4'] * 100)*(.127)) + (($ticker) *.145*100));

$calcypos = $singlecaptchachr['ypos1']*100;
$calcy2pos = $singlecaptchachr['ypos2']*100; 
$calcy3pos = $singlecaptchachr['ypos3']*100; 
$calcy4pos = $singlecaptchachr['ypos4']*100; 

$width = ($calcx3pos - $calcxpos);
$height = ($calcy4pos - $calcypos);



echo "style='height:". $height."%;width:".$width ."%;";

echo "left:".$calcxpos."%;";
echo "top:".$calcypos."%;";

echo "background-color:#".$calccolor.";'></div>";


}


++$ticker;
}

echo "</div><div id='divscffooter' class='classscffooter'>";
echo "<a href='stylecaptchamodule.php'>Refresh Image</a>";
echo "<input name='captchainput' 'type='text' id='scftext'></input>";
echo "</div></div>";

?>