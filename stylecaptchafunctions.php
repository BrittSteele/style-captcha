<?php

function scfsalt($string) {
$salt1 = "scf&";
$salt2 = "captcha@";
$token = hash('ripemd128',"$salt1$string$salt2");
return $token;
}


function scfgeneratecaptchastring() {
$captchaselection = array("E","F","H","I","L","T");
$captchastring = "";
for ($count = 0; $count < 7; ++$count) {
		$selector = rand(0,5);
		$captchastring .= $captchaselection[$selector];

	}
return $captchastring;
}

function scfgetcoords($captchastring) {
$singlecharacterarray = array();
$captchacoords = array();
$captchastringarray = str_split($captchastring);
for ($count = 0; $count < 7; ++$count) {
	switch ($captchastringarray[$count]) {
		
		case "E":
		$singlecharacterarray[0]['xpos1'] = ".01";
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".01";
		$singlecharacterarray[0]['ypos2'] = ".99";

		$singlecharacterarray[0]['xpos3'] = ".07";
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".07";
		$singlecharacterarray[0]['ypos4'] = ".99";


		$singlecharacterarray[1]['xpos1'] = ".01";
		$singlecharacterarray[1]['ypos1'] = ".01";
		$singlecharacterarray[1]['xpos2'] = ".01";
		$singlecharacterarray[1]['ypos2'] = ".07";

		$singlecharacterarray[1]['xpos3'] = ".99";
		$singlecharacterarray[1]['ypos3'] = ".01";
		$singlecharacterarray[1]['xpos4'] = ".99";
		$singlecharacterarray[1]['ypos4'] = ".07";


		$singlecharacterarray[2]['xpos1'] = ".01";
		$singlecharacterarray[2]['ypos1'] = ".47";
		$singlecharacterarray[2]['xpos2'] = ".01";
		$singlecharacterarray[2]['ypos2'] = ".53";

		$singlecharacterarray[2]['xpos3'] = ".99";
		$singlecharacterarray[2]['ypos3'] = ".47";
		$singlecharacterarray[2]['xpos4'] = ".99";
		$singlecharacterarray[2]['ypos4'] = ".53";

		$singlecharacterarray[3]['xpos1'] = ".01"; //top left
		$singlecharacterarray[3]['ypos1'] = ".93";
		$singlecharacterarray[3]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[3]['ypos2'] = ".99";

		$singlecharacterarray[3]['xpos3'] = ".99"; //top right
		$singlecharacterarray[3]['ypos3'] = ".93";
		$singlecharacterarray[3]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[3]['ypos4'] = ".99";


		break;
		case "F":
		$singlecharacterarray[0]['xpos1'] = ".01"; //top left
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[0]['ypos2'] = ".99";
		$singlecharacterarray[0]['xpos3'] = ".07"; //top right
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".07"; //bottom right
		$singlecharacterarray[0]['ypos4'] = ".99";

		$singlecharacterarray[1]['xpos1'] = ".01"; //top left
		$singlecharacterarray[1]['ypos1'] = ".01";
		$singlecharacterarray[1]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[1]['ypos2'] = ".07";
		$singlecharacterarray[1]['xpos3'] = ".99"; //top right
		$singlecharacterarray[1]['ypos3'] = ".01";
		$singlecharacterarray[1]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[1]['ypos4'] = ".07";

		$singlecharacterarray[2]['xpos1'] = ".01"; //top left
		$singlecharacterarray[2]['ypos1'] = ".47";
		$singlecharacterarray[2]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[2]['ypos2'] = ".53";
		$singlecharacterarray[2]['xpos3'] = ".99"; //top right
		$singlecharacterarray[2]['ypos3'] = ".47";
		$singlecharacterarray[2]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[2]['ypos4'] = ".53";

		break;

		case "H":
		$singlecharacterarray[0]['xpos1'] = ".01"; //top left
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[0]['ypos2'] = ".99";
		$singlecharacterarray[0]['xpos3'] = ".07"; //top right
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".07"; //bottom right
		$singlecharacterarray[0]['ypos4'] = ".99";

		$singlecharacterarray[1]['xpos1'] = ".01"; //top left
		$singlecharacterarray[1]['ypos1'] = ".47";
		$singlecharacterarray[1]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[1]['ypos2'] = ".53";
		$singlecharacterarray[1]['xpos3'] = ".99"; //top right
		$singlecharacterarray[1]['ypos3'] = ".47";
		$singlecharacterarray[1]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[1]['ypos4'] = ".53";

		$singlecharacterarray[2]['xpos1'] = ".93"; //top left
		$singlecharacterarray[2]['ypos1'] = ".01";
		$singlecharacterarray[2]['xpos2'] = ".93"; //bottom left
		$singlecharacterarray[2]['ypos2'] = ".99";
		$singlecharacterarray[2]['xpos3'] = ".99"; //top right
		$singlecharacterarray[2]['ypos3'] = ".01";
		$singlecharacterarray[2]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[2]['ypos4'] = ".99";
		break;
		case "I":
		$singlecharacterarray[0]['xpos1'] = ".01"; //top left
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[0]['ypos2'] = ".07";
		$singlecharacterarray[0]['xpos3'] = ".99"; //top right
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[0]['ypos4'] = ".07";

		$singlecharacterarray[1]['xpos1'] = ".47"; //top left
		$singlecharacterarray[1]['ypos1'] = ".01";
		$singlecharacterarray[1]['xpos2'] = ".47"; //bottom left
		$singlecharacterarray[1]['ypos2'] = ".99";
		$singlecharacterarray[1]['xpos3'] = ".53"; //top right
		$singlecharacterarray[1]['ypos3'] = ".01";
		$singlecharacterarray[1]['xpos4'] = ".53"; //bottom right
		$singlecharacterarray[1]['ypos4'] = ".99";

		$singlecharacterarray[2]['xpos1'] = ".01"; //top left
		$singlecharacterarray[2]['ypos1'] = ".93";
		$singlecharacterarray[2]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[2]['ypos2'] = ".99";
		$singlecharacterarray[2]['xpos3'] = ".99"; //top right
		$singlecharacterarray[2]['ypos3'] = ".93";
		$singlecharacterarray[2]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[2]['ypos4'] = ".99";		
		break;
		case "L":
		$singlecharacterarray[0]['xpos1'] = ".01"; //top left
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".99"; //bottom left
		$singlecharacterarray[0]['ypos2'] = ".01";
		$singlecharacterarray[0]['xpos3'] = ".07"; //top right
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".07"; //bottom right
		$singlecharacterarray[0]['ypos4'] = ".99";

		$singlecharacterarray[1]['xpos1'] = ".01"; //top left
		$singlecharacterarray[1]['ypos1'] = ".93";
		$singlecharacterarray[1]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[1]['ypos2'] = ".99";
		$singlecharacterarray[1]['xpos3'] = ".99"; //top right
		$singlecharacterarray[1]['ypos3'] = ".93";
		$singlecharacterarray[1]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[1]['ypos4'] = ".99";
		break;
		case "T":
		$singlecharacterarray[0]['xpos1'] = ".01"; //top left
		$singlecharacterarray[0]['ypos1'] = ".01";
		$singlecharacterarray[0]['xpos2'] = ".01"; //bottom left
		$singlecharacterarray[0]['ypos2'] = ".07";
		$singlecharacterarray[0]['xpos3'] = ".99"; //top right
		$singlecharacterarray[0]['ypos3'] = ".01";
		$singlecharacterarray[0]['xpos4'] = ".99"; //bottom right
		$singlecharacterarray[0]['ypos4'] = ".07";

		$singlecharacterarray[1]['xpos1'] = ".47"; //top left
		$singlecharacterarray[1]['ypos1'] = ".01";
		$singlecharacterarray[1]['xpos2'] = ".47"; //bottom left
		$singlecharacterarray[1]['ypos2'] = ".99";
		$singlecharacterarray[1]['xpos3'] = ".53"; //top right
		$singlecharacterarray[1]['ypos3'] = ".01";
		$singlecharacterarray[1]['xpos4'] = ".53"; //bottom right
		$singlecharacterarray[1]['ypos4'] = ".99";
		break;
	}
	$captchacoords[] = $singlecharacterarray;
		unset($singlecharacterarray);

}
return $captchacoords;
}




?>
