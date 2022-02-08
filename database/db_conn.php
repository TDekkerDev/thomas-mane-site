<?php
$sname = "localhost";
$unmae = "api";
$password = "Thomasdekker197";
$db_name = "dekkerthomas";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}