<?php
include("../res/x5engine.php");
$nameList = array("8w8","pnz","2j6","ctm","tkk","5v6","kzz","tmx","zzk","7f5");
$charList = array("C","5","7","H","4","E","V","L","4","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
