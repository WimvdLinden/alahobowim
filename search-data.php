<?php
require_once "./backend/DbConfig.php";
require_once "./backend/Search.php";

$searchObj = new Search();

	$result = $searchObj->feedData();

$vidId = "ffffffff";
$rn = array();
foreach ($result as $r){
	array_push($rn,$r->serieTitel);
}
$matches = preg_grep("/".$_POST["search-data"]."/",$rn);
foreach ($matches as $mt){
	print "<a href='./watch.php?w=".$vidId."'>".$mt."<br>";
}
?>