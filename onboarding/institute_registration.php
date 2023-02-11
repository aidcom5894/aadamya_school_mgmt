<?php 

include($_SERVER['DOCUMENT_ROOT'].'/aadamya_school_mgmt/db_configuration/configuration.php');

?>	

<!DOCTYPE html>
<html lang="en">
<head>
<title>Aadamya-Institute Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<!-- External CSS libraries -->
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/fonts/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/fonts/flaticon/font/flaticon.css">

<!-- Favicon icon -->
<link rel="shortcut icon" href="../modules/onboarding/assets/img/favicon.ico" type="image/x-icon" >

<!-- Google fonts -->
<link href="../modules/onboarding/assets/fonts/googlefonts.css" rel="stylesheet">

<!-- Custom Stylesheet -->
<link type="text/css" rel="stylesheet" href="../modules/onboarding/assets/css/style.css">

<style type="text/css">


</style>

</head>
<body id="top">
<div class="page_loader"></div>

<!-- Login 13 start -->
<div class="login-13">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-12 bg-img ">
<div class="bg-img-inner">
<div class="info">
<div class="name_wrap"><h3><span>INSTITUTE</span> REGISTRATION<span class="overlay_effect"></span></h3></div>
<p style="text-align: justify;">Experience the all new Feature of managing your Institution online with Aadamya School Management System. A Complete solution for Institutions to help track all Records and handle Official School Related Data & Transactions.</p>
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
<h3>Register Your Institute Here</h3>
<div class="btn-section clearfix">
<a href="admin_login" class="link-btn active btn-1 default-bg">Login</a>
<a href="admin_registration" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">



<form action="#" method="POST">

<div class="form-group form-box">
<input name="institute_name" id="name" type="text" class="form-control" placeholder="Institute Name" aria-label="Full Name" autocomplete="off" required="" oninput="changetoTitle()">
</div>

<div class="form-group form-box">
<input name="hod_name" id="name" type="text" class="form-control" placeholder="HOD Name" aria-label="Full Name" autocomplete="off" required="">
</div>


<div class="form-group form-box">
<input name="contact" type="number" maxlength="10" class="form-control" placeholder="HOD Contact No." aria-label="HOD Contact" autocomplete="off" required="" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

</div>
<div class="form-group form-box clearfix">
<input name="password" type="password" class="form-control" placeholder="Password" aria-label="Password" autocomplete="off" minlength="8" required="">

</div>
<!-- <div class="form-group checkbox clearfix">
<div class="clearfix float-start">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="rememberme">
<label class="form-check-label" for="rememberme">
I agree to the terms of service
</label>
</div>
</div>
</div> -->
<div class="form-group">
<button type="submit" name="register" class="btn btn-primary btn-lg btn-theme">Register</button>
</div>
</form>

<script type="text/javascript">
	function changetoTitle()
	{
		var authorisedName = document.getElementById('name');
		authorisedName.value = authorisedName.value.toUpperCase();
	}
</script>

<?php 

if(isset($_POST['register']))
{
	$instName = $_POST['institute_name'];
	$hodName = $_POST['hod_name'];
	$hodContact = $_POST['contact'];
	$password = $_POST['password'];
	$instId = "Institute Registration";
	$instAddress = "Address Default";

	$sql = "INSERT INTO institute_registration(institute_name,hod_name,hod_contact,password,inst_reg_id,institute_address) VALUES('$instName','$hodName','$hodContact','$password','$instId','$instAddress')";

	$queryinstName = "SELECT * FROM institute_registration WHERE (institute_name='$instName')";
	$queryhodContact = "SELECT * FROM institute_registration WHERE (hod_name='$hodName')";

	$dataexist = mysqli_query($config,$queryinstName);

	if(mysqli_num_rows($dataexist)>0)
	{
		echo "<script>alert('Your Institute is already Registered. Please Login to access Dashboard.')</script>";
		echo '<script type="text/javascript">window.location = "admin_login"</script>';
	}

	elseif(mysqli_query($config,$queryhodContact))
	{
		echo "<script>alert('HOD Contact already exists. Please Login to access Dashboard.')</script>";
		echo '<script type="text/javascript">window.location = "admin_login"</script>';
	}

	elseif(mysqli_query($config, $sql))
	{
		echo "<script>alert('Registration Successful')</script>";
		echo '<script type="text/javascript">window.location = "admin_login"</script>';
	}

	else
	{
		echo "<script>alert('Institute Registration Failed')</script>";
		echo '<script type="text/javascript">window.location = "institute_registration"</script>';
	}
}

?>

</div>
<ul class="social-list">
<!-- <li><a href="#" class="facebook-color"><i class="fa fa-facebook facebook-i"></i><span>Facebook</span></a></li> -->
<li><a href="http://localhost/aadamya_school_mgmt" class="goole-color" ><span>Home</span></a></li>
<!-- <li><a href="#" class="google-color"><i class="fa fa-google google-i"></i><span>Google</span></a></li> -->
</ul>

<!-- <p class="none-2">Already a member?<a href="login-13.html" class="thembo">Login here</a></p> -->

</div>
</div>
</div>
</div>
</div>
</div>
<!-- Login 13 end -->

<!-- External JS libraries -->
<script src="../modules/onboarding/assets/js/jquery-3.6.0.min.js"></script>
<script src="../modules/onboarding/assets/js/bootstrap.bundle.min.js"></script>
<script src="../modules/onboarding/assets/js/jquery.validate.min.js"></script>
<!-- <script src="../modules/onboarding/assets/js/app.js"></script> -->
<!-- Custom JS Script -->
</body>
</html>
