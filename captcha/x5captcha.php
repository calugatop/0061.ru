<?php
include("../res/x5engine.php");
$nameList = array("fp3","7la","ca7","unn","zml","5vz","v8z","r2y","j7f","y7s");
$charList = array("6","E","5","D","T","L","R","E","S","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
