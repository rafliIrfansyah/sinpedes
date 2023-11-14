<?php  
	session_start();
    include("../config.php");
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:../login.php?pesan=belum_login");
	}
  else{
    if($_SESSION['status'] != "admin"){
        header("location:../login.php?pesan=admin_only");
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kirim Keluhan - Sinpedes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
   
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/util.css">
	  <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="admin.php"><img class="main-logo" src="img/logo/logosn.png" alt="" /></a>
                    <strong><img src="img/logo/logos.png" alt=""></strong>
                </div>
                <div class="nalika-profile">
                    <div class="profile-dtl">
                         <!-- Profile
		============================================ -->
                    </div>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="nav-link" href="admin.php">
                                    <i class="icon nalika-home icon-wrap"></i>
                                    <span class="mini-click-non">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="inbox-admin.php" aria-expanded="false"><i class="icon nalika-inbox icon-wrap"></i> <span class="mini-click-non">Inbox</span></a>
                            </li>
                            <li>
                                <a class="nav-link" href="steganography.php" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Steganography</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="icon nalika-menu-task"></i>
                                          </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
                                              <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control" style="color:#d41872;">
                                                <a href=""><i class="fa fa-search"></i></a>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">                                                      
                                                <li class="nav-item">
                                                <form action="logout.php" method="POST">
                                                <button class="login100-form-btn" action="logout.php">LOG OUT
						                                    </button> 
                                                </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <section class="breadcome-list">
        <div class="card">
            <div class="card-body">
            <?php
            if(isset($_GET['id_keluhan']) && isset($_GET['pesan'])){
              if($_GET['pesan'] == "success"){
                ?>
                    <div class="alert alert-success" role="alert">
                    Tanggapan telah terkirim!
                    </div>

                    <?php
                    }
                 elseif($_GET['pesan'] == "kosong"){
                    ?>
                    <div class="alert alert-danger" role="alert">
                    Tanggapan atau key tidak boleh kosong!
                    </div>
                <?php
                }
                $id_keluhan = $_GET['id_keluhan'];
                $query1 =  mysqli_query($sambungan, "SELECT * FROM keluhan WHERE id_keluhan='$id_keluhan'")
                or die(mysqli_error($sambungan));
                $data1 = mysqli_fetch_array($query1);
                $encrypted = $data1['deskripsi_keluhan'];
                $method = "aes-256-cbc";
                $key = $data1['key'];
                $iv = str_repeat(0x0, 16);
                $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
                $id_user = $data1['id_user'];
                $query2 = mysqli_query($sambungan, "SELECT * FROM users WHERE id_user='$id_user'")
                or die(mysqli_error($sambungan));
                $data2 = mysqli_fetch_array($query2);
            ?>
            <fieldset>
            <legend style="color:#d41872;">
                Pengirim : <?php echo $data2['username']?>
              </legend>
              <legend style="color:#fff;">
                Deskripsi Keluhan
              </legend>
                <p style="color:#fff;"><?php echo str_rot13($decrypted)?></p>
            </fieldset>
            <?php
            }
            ?>
            <br>
            <form class="form-horizontal" method="post" action="proses-tanggapan.php?id_keluhan=<?php echo $id_keluhan?>" enctype="multipart/form-data">
                      <fieldset>
                        <legend style="color:#fff;">Sampaikan tanggapan Anda</legend>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" style="color:#fff;" for="textArea">Deskripsi Tanggapan</label>
                          <div class="col-lg-4">
                            <textarea class="form-control" id="pesanRahasia" rows="3" name="desc_tanggapan"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" style="color:#fff;" for="inputPassword">Key</label>
                          <div class="col-lg-4">
                            <input class="form-control" id="inputPassword" type="password" name="key_tanggapan">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="textArea"></label>
                          <div class="col-lg-2">
                            <input type="submit" name="kirim_tanggapan" value="Kirim tanggapan" class="form-control btn btn-info">
                          </div>
                        </div>
                      </fieldset>
                    </form>
          </div>
        </section> 
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <script src="../assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#file').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": true,
            "bAutoWidth": true,
          "order": [0, "asc"]
        });
        });
    </script>
    <script src="../assets/plugins/datatables/js/jquery.dataTables.js"></script>
    <script src="../assets/js/essential-plugins.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/pace.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>