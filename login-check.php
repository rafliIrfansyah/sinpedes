<?php
    session_start();  
	include "config.php";

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysqli_query($sambungan, "SELECT * FROM users WHERE username = '$username'") or die (mysqli_error($sambungan));
	$cek = mysqli_num_rows($query);
	$pw = mysqli_fetch_array($query);
	$encryptedPassword = $pw['password'];
	$uname = $pw['username'];
	$status = $pw['status'];
	if($cek > 0){
		if(password_verify($password, $encryptedPassword ) && $uname==$username){
			if($status=="admin"){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['status'] = $status;
				header("location:dashboard/admin.php");
			}
			else{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['status'] = $status;
				header("location:dashboard/home.php");
			}
			
		}
		else{
			header("location:login.php?pesan=gagal");
		}
	}
	else{
		header("location:login.php?pesan=gagal");
	}
?>