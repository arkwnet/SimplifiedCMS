<?php

$password = "password";	// Password which use to edit index.html

if($_POST["passwd"] == $password) {
	define("index", "./index.html");
	$fh = fopen(index, "w");
	fwrite($fh,$_POST["htmlbox"]);
	fclose($fh);
	echo "The file was written successfully.<br><a href='index.html'>See index.html</a>";
}else{
	echo "ERROR : Password is incorrect.";
}
?>