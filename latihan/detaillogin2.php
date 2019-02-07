<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<style> 
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}

	
</style>
	<title>Welcome</title>
</head>
<body>
<h2 align="center"><b> Detail Data Diri</b>
	<br>

<table align="" style="width: 50%">
 <?php
require'db.login/config.php';

$sql = "SELECT ID, nama, sandi, email FROM sb_users WHERE nama = '" . $_SESSION['nama'] ."'";

$result = mysqli_query($conn , $sql);
$hasil = mysqli_fetch_assoc($result);


?>
	<tr>
		<th>
			ID
		</th>

		<th>
			Nama
		</th>
		<th>
			Sandi
		</th>
		<th>
			Email
		</th>
		<th>
			Option
		</th>
	</tr>

	<tr>
		<td>
			<?php echo $hasil['ID'] ?>
		</td>
		<td>
			<?php echo $hasil['nama'] ?>
		</td>
		<td>
			<?php echo $hasil['sandi'] ?>
		</td>
		<td>
			<?php echo $hasil['email'] ?>
		</td>
		<td>
			<p><a href="#"> [EDIT]</p>
			<p><a href="db.login/logout.php">[Logout]</p>
		</td>

<?php		
echo $_SESSION['username'];
?>

	</tr>




</table>

</body>
</html>