<?php  
	session_start();
    include("../config.php");
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:login.php?pesan=belum_login");
	}
    else{
        $query = mysqli_query($sambungan, "SELECT * FROM users WHERE username='$username'")
        or die(mysqli_error($sambungan));
        $pickid = mysqli_fetch_array($query);
        $id = $pickid['id_user'];
        $desc_keluhan = $_POST['desc_keluhan'];
        $rot13 = str_rot13($desc_keluhan);
	    $key_keluhan = $_POST['key_keluhan'];
        if($desc_keluhan=="" || $key_keluhan==""){
            header("location:kirim-keluhan.php?pesan=kosong");
        }
        else{
        $method = "aes-256-cbc";
        $key = password_hash($key_keluhan, PASSWORD_BCRYPT);
        $iv = str_repeat(0x0, 16);
        $encrypted = base64_encode(openssl_encrypt($rot13, $method, $key, OPENSSL_RAW_DATA, $iv));
        $query = mysqli_query($sambungan, "INSERT INTO keluhan VALUES ('','$id','$encrypted','$key',CURDATE(),'Belum ditanggapi')")
		or die(mysqli_error($sambungan));
        
            if($query){
                header("location:kirim-keluhan.php?pesan=success");
		    }
            else{
                header("location:kirim-keluhan.php?pesan=gagal");
            }
        }
    }
?>