<?php
include("../res/x5engine.php");
$nameList = array("mja","fen","kkd","anh","huz","2un","3ss","s4d","guc","prh");
$charList = array("4","T","4","6","P","P","G","L","A","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
