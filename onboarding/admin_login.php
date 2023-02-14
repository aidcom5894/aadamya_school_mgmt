<?php 

include($_SERVER['DOCUMENT_ROOT'].'/aadamya_school_mgmt/db_configuration/configuration.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AADAMYA - ADMIN LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<!-- External CSS libraries -->
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/fonts/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/fonts/flaticon/font/flaticon.css">

<script src="https://code.iconify.design/iconify-icon/1.0.3/iconify-icon.min.js"></script>


<!-- Favicon icon -->
<link rel="shortcut icon" href="../modules/onboarding/assets/img/favicon.ico" type="image/x-icon" >

<!-- Google fonts -->
<link href="../modules/onboarding/assets/fonts/googlefonts.css" rel="stylesheet">

<!-- Custom Stylesheet -->
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/css/style.css">

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>ADMIN</span> LOGIN<span class="overlay_effect"></span></h3></div>
<p style="text-align:justify;">The Full Featured Dashboard awaits to help you Experience the awesome online Functionality of <strong>Aadamya</strong>. Login to experience the leading Features for managing all School Transations.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 form-info">
<div class="form-section">
<div class="form-section-innner">
<div class="logo clearfix">
<a href="login-13.html">
<img src="../modules/onboarding/assets/img/logos/logo.png" alt="logo">
</a>
</div>
<h3>Admin Login Portal</h3>
<div class="btn-section clearfix">
<a href="login_platform" class="link-btn active btn-1 active-bg">Login</a>
<a href="institute_registration" class="link-btn btn-2 default-bg">Register</a>
</div>
<div class="login-inner-form">


<form action="#" method="POST">

<div class="form-group form-box clearfix">
<input name="adminName" type="text" class="form-control" placeholder="HOD Name" autocomplete="off" aria-label="Institute ID"> 
</div>

<div class="form-group form-box clearfix">
<input name="instID" type="text" class="form-control" placeholder="Institute ID" autocomplete="off" aria-label="Institute ID"> 
</div>

<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password">
</div>

<div class="checkbox form-group clearfix">
<div class="form-check float-start">
<input class="form-check-input" type="checkbox" id="rememberme">
<label class="form-check-label" for="rememberme">
Remember me
</label>
</div>
<a href="#" class="link-light float-end forgot-password">Forgot password?</a>
</div>
<div class="form-group">
<button type="submit" name="login" class="btn btn-primary btn-lg btn-theme">Login</button>
</div>
</form>
</div>

<ul class="social-list form-group">
<!-- <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li> -->
<li><a href="http://localhost/aadamya_school_mgmt" class="goole-color" ><span>Home</span></a></li>
<!-- <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li> -->
</ul>
<p class="none-2">Don't have an account? <a href="#" class="thembo"> Register here</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Login 13 end -->

<?php 
	
	if(isset($_POST['login']))
	{
		$admin_Name = $_POST['adminName'];
		$institute_id = $_POST['instID'];
		$password = $_POST['password'];

		// $fetchedAdmin = session_name();

		$checkEntry = mysqli_query($config, "SELECT * FROM admin_login_details WHERE login_id='$institute_id' and password='$password' and admin_name='$admin_Name'");

		if(mysqli_num_rows($checkEntry)>0)
		{
			
			session_start();
			
		}
		else
		{
			echo "<script>alert('Login Failed')</script>";
		}

	}
	else
	{
		echo "";
	}

?>




<!-- External JS libraries -->
<script src="../modules/onboarding/assets/js/jquery-3.6.0.min.js"></script>
<script src="../modules/onboarding/assets/js/bootstrap.bundle.min.js"></script>
<script src="../modules/onboarding/assets/js/jquery.validate.min.js"></script>
<!-- <script src="assets/js/app.js"></script> -->
<!-- Custom JS Script -->
</body>
</html>
