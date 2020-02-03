<?php
include("../res/x5engine.php");
$nameList = array("5c8","zwt","man","cwr","fhy","xyn","adn","m4x","45k","anv");
$charList = array("U","Y","H","L","7","S","W","U","E","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
