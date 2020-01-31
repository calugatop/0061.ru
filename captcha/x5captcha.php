<?php
include("../res/x5engine.php");
$nameList = array("rtl","3nz","tg4","3ru","587","4t5","ma5","4na","x2t","llx");
$charList = array("M","2","H","4","Y","J","2","3","A","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
