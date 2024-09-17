<?php
include("../res/x5engine.php");
$nameList = array("t34","sks","tse","cde","5ja","rg7","x83","rnt","rg8","k7f");
$charList = array("X","T","A","H","5","5","F","4","C","4");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
