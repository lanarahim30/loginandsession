<?php
session_start();
include "koneksi.php";
	$usern = $_POST['username'];
	$passw = $_POST['password'];
	$query = "SELECT * FROM admin WHERE username = '$usern' AND password= '$passw'";
	$run_query = mysqli_query($konek, $query);
	$cek   = mysqli_num_rows($run_query);

	if ($cek) {
		$_SESSION['username']=$usern;
		$_SESSION['password']=$passw;
		header('location: admin.php');
	}
	else{
		?> 
		gagal login, silahkan kembali ke <a href="form_admin.php">Login</a><?php
	}
?> 