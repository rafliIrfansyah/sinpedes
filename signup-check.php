<?php
	include "config.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$cekdb = mysqli_query($sambungan, "SELECT * FROM users WHERE username='$username'")
	or die(mysqli_error($sambungan));
	$hitung = mysqli_num_rows($cekdb);
	$un = mysqli_fetch_array($cekdb);
	
	$cekdbkosong = mysqli_query($sambungan, "SELECT * FROM users")
	or die(mysqli_error($sambungan));
	$hitungdbkosong = mysqli_num_rows($cekdbkosong);

	$uname = $un['username'];
	$encryptPassword = password_hash($password, PASSWORD_BCRYPT);

	if($hitungdbkosong==0){
		$query1 = mysqli_query($sambungan, "INSERT INTO users (username,password,status) VALUES ('$username','$encryptPassword','admin')")
		or die(mysqli_error($sambungan));
		if($query1){
			header("location:login.php?pesan=success");
		}
	}
	else{
		if($hitung==0){
			if($uname==$username){
				header("location:index.php?pesan=already");
			}
			else{
				$query2 = mysqli_query($sambungan, "INSERT INTO users (username,password,status) VALUES ('$username','$encryptPassword','user')")
				or die(mysqli_error($sambungan));
				if($query2){
					header("location:login.php?pesan=success");
				}
			}
		}
		else{
			header("location:index.php?pesan=already");
		}
	}
	
?>