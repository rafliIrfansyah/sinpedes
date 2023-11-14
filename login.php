<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Sinpedes</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <?php
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "success"){
    ?>
          <div class="alert alert-success" role="alert">
          Anda berhasil terdaftar!
          </div>
      <?php
        }
        elseif ($_GET['pesan'] == "logout") {
            ?>
                <div class="alert alert-success" role="alert">
                Anda berhasil Log Out!
                </div>
            <?php
              }
        elseif ($_GET['pesan'] == "gagal") {
      ?>
          <div class="alert alert-danger" role="alert">
          Username atau password anda salah!
          </div>
      <?php
        }
        elseif ($_GET['pesan'] == "belum_login") {
      ?>
          <div class="alert alert-danger" role="alert">
          Silahkan Login terlebih dahulu!
          </div>
    <?php
        }
		elseif ($_GET['pesan'] == "admin_only") {
		?>
			<div class="alert alert-danger" role="alert">
			Anda bukanlah admin!
			</div>
		<?php
			 }
      }
    ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-login-register.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					ACCOUNT LOGIN
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="login-check.php" method="POST">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							LOGIN
						</button>
					</div>
                    <div class="container-login100-form-btn m-t-15">
                        <a href="index.php">Belum punya akun?</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>