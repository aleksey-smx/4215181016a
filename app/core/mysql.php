<?php
$mysqli = new mysqli('localhost', 'root', '', 'test_temp');

if (mysqli_connect_errno()) {
	die('Unable to connect DB. Error: '.mysqli_connect_error()); 
	exit; 
}

mysqli_set_charset($mysqli, "utf8");