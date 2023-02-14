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
<a href="login_platform" class="link-btn active btn-1 default-bg">Login</a>
<a href="institute_registration" class="link-btn btn-2  active-bg">Register</a>
</div>
<div class="login-inner-form">



<form action="#" method="POST">

<div class="form-group form-box">
<input name="institute_name" id="name" type="text" class="form-control" placeholder="Institute Name" aria-label="Full Name" autocomplete="off" required="" oninput="changetoTitle()">
</div>

<div class="form-group form-box">
<input name="hod_name" id="hodName" type="text" class="form-control" placeholder="HOD Name" aria-label="Full Name" autocomplete="off" required="" oninput="changetoTitle()">
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
		var authorisedHod = document.getElementById('hodName');

		authorisedName.value = authorisedName.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1);});

		authorisedHod.value = authorisedHod.value.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1);});		
	}
</script>

<?php 
	if(isset($_POST['register']))
	{
		$instName = $_POST['institute_name'];
		$hodName = $_POST['hod_name'];
		$hodContact = "+91-".$_POST['contact'];
		$password = $_POST['password'];
		$genInstId = strtoupper(substr($instName, 0,4).date('my').substr($hodContact,-4));
		$inst_recognition_id = $genInstId;
		$institute_email = "youremail@institute.com";
		$instRegId = "Update your Institution Registration No.";
		$instAddress = "Update your Institute Address Here";
		$admin_role = "super_admin";

		$sql = "INSERT INTO institute_registration(institute_name,admin_name,admin_role,hod_contact,password,login_id,institute_email,inst_reg_id,institute_address) VALUES('$instName','$hodName','$admin_role','$hodContact','$password','$inst_recognition_id','$institute_email','$instRegId','$instAddress')";

		// $sql = "INSERT INTO admin_login_details (admin_name, admin_role, login_id, password) SELECT admin_name, admin_role, login_id, password FROM institute_registration";

		$checkInstName = mysqli_query($config, "SELECT * FROM institute_registration WHERE (institute_name='$instName')");

		$checkhodContact = mysqli_query($config, "SELECT * FROM institute_registration WHERE (hod_contact='$hodContact')");

		
		if(mysqli_num_rows($checkInstName)>0)	
		{
			echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
			echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>";
			echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
			echo "</svg>";
			echo "<div>";
			echo "Your Institue is already registered.<a href='admin_login' class='alert-link'> Login Here</a>";
			echo "</div>";
			echo "</div>";
		}

		elseif(mysqli_num_rows($checkhodContact)>0)
		{
			echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>";
			echo "<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-exclamation-triangle-fill flex-shrink-0 me-2' viewBox='0 0 16 16' role='img' aria-label='Warning:'>";
			echo "<path d='M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>";
			echo "</svg>";
			echo "<div>";
			echo "Contact No already Registered.<a href='admin_login' class='alert-link'> Login Here</a>";
			echo "</div>";
			echo "</div>";
		}
		
		elseif(mysqli_query($config,$sql))
		{
			echo "<svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>";
			echo "<symbol id='check-circle-fill' fill='currentColor' viewBox='0 0 16 16'>";
			echo "<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z'/>";
			echo "</symbol>";
			echo "<div class='alert alert-success d-flex align-items-center' role='alert'>";
			echo "<svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>";
			echo "<div>";
			echo "Institute Registered Successfully with ID <br> <strong>$inst_recognition_id</strong>. Use this ID to <a href='admin_login' class='alert-link'>Login</a>";
			echo "</div>";
			echo "</div>";



		}

		else
		{
			echo "Failed";
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
