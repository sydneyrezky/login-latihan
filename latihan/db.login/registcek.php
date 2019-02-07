<?php


if (isset($_POST['submit-daftar'])) {
	require'config.php';
	
	$nama = $_POST['nama'];
	$sandi = $_POST['sandi'];
	$email = $_POST['email'];


	$sql = "INSERT INTO sb_users (nama, sandi, email) VALUES ('$nama','$sandi','$email')";
	$result = mysqli_query($conn, $sql);
	echo 
		"Your name: ".$nama."<br>",
		"Your Password: " .$sandi."<br>", 
		"Your Email: " .$email."<br>",
		header("Location:../index.php");


}


	

?>