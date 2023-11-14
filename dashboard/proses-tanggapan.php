<?php  
	session_start();
    include("../config.php");
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:../login.php?pesan=belum_login");
	}
    else{
        $id_keluhan = $_GET['id_keluhan'];
        $query = mysqli_query($sambungan, "SELECT * FROM keluhan WHERE id_keluhan='$id_keluhan'")
        or die(mysqli_error($sambungan));
        $pickid = mysqli_fetch_array($query);
        $id_user = $pickid['id_user'];
        $desc_tanggapan = $_POST['desc_tanggapan'];
        $rot13 = str_rot13($desc_tanggapan);
	    $key_tanggapan = $_POST['key_tanggapan'];
        if($desc_tanggapan=="" || $key_tanggapan==""){
            header("location:kirim-tanggapan.php?id_keluhan=$id_keluhan&pesan=kosong");
        }
        else{
        $method = "aes-256-cbc";
        $key = password_hash($key_tanggapan, PASSWORD_BCRYPT);
        $iv = str_repeat(0x0, 16);
        $encrypted = base64_encode(openssl_encrypt($rot13, $method, $key, OPENSSL_RAW_DATA, $iv));
        $query1 = mysqli_query($sambungan, "INSERT INTO tanggapan VALUES ('','$id_keluhan','$id_user','$encrypted','$key',CURDATE(),'Belum dilihat')")
		or die(mysqli_error($sambungan));
        $query2 = mysqli_query($sambungan, "UPDATE keluhan SET status_keluhan = 'Telah ditanggapi' WHERE id_keluhan = $id_keluhan;")
		or die(mysqli_error($sambungan));
            if($query1 && $query2){
                header("location:kirim-tanggapan.php?id_keluhan=$id_keluhan&pesan=success");
		    }
            else{
                header("location:kirim-tanggapan.php?id_keluhan=$id_keluhan&pesan=gagal");
            }
        }
    }
?>