<?php
include("../res/x5engine.php");
$nameList = array("wsr","5c2","arg","hf5","jud","rcg","j26","ca4","ver","cyh");
$charList = array("3","J","M","2","P","L","P","W","M","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
