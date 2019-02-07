<?php

session_start();

if (isset($_POST['login'])) {
	require'config.php';

	$nama = $_POST['nama'];
	$sandi = $_POST['sandi'];
	

	$_SESSION['nama'] = $nama;
	$_SESSION['sandi'] = $sandi;
	


	$sql = "SELECT nama, sandi FROM sb_users WHERE nama='$nama';";
	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);


	if($row['nama']=="$nama" && $row['sandi']=="$sandi"){ 
		//echo "Youre Valid User";

header("Location:../detaillogin.php");
} 
else{echo "you are not a valid user"; } 
} 
?>