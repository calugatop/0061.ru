<?php
include("../res/x5engine.php");
$nameList = array("hhl","z4u","ksm","78r","gkt","ec3","cf6","4xj","cnp","jwn");
$charList = array("F","Z","R","H","D","D","T","Y","2","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
