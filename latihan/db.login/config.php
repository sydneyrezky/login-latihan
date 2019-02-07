<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "serius";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Koneksi Gagal:" . mysqli_connect_error());
}else{
	echo "";
}
?>