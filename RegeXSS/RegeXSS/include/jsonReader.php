<?php
header("X-Frame-Options: sameorigin");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if (!file_exists("regexss.json")) {
	$regJSON = fopen("regexss.json", "w");
	fwrite($regJSON, "[]");
	fclose($regJSON);
}else{
	$readJSON = file_get_contents('regexss.json');
	echo $readJSON;
}
?>
