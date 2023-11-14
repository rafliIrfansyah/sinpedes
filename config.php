<?php  
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "sinpedes";

	$sambungan = new mysqli($hostname, $username, $password, $database);

	if($sambungan -> connect_error){
		die('Maaf koneksi gagal :'. $connect->connect_error);
	}
?>