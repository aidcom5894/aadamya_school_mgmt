<?php 

include('../master_content/admin_master/admin_header.php');
include('../master_content/admin_master/admin_navbar.php');
include('../master_content/admin_master/admin_sidebar.php');

?>


<!-- section for breadcrumb starts here -->
<div class="dashboard-content-one">
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
<h3>Admin Dashboard</h3>
<ul>
<li>
<a href="../onboarding/admin_dashboard">Home</a>
</li>
<li>Profile Management</li>
</ul>
</div>
<!-- Breadcrumbs Area End Here -->
<!-- 
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div> -->

<!-- Admit Form Area Start Here -->
<div class="card height-auto">
<div class="card-body">
<div class="heading-layout1">
<div class="item-title">
<h3>Manage Your Profile Here</h3>
</div>

<div class="dropdown">
<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
aria-expanded="false">...</a>

<!-- <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#"><i
class="fas fa-times text-orange-red"></i>Close</a>
<a class="dropdown-item" href="#"><i
class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
<a class="dropdown-item" href="#"><i
class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
</div> -->
</div>

</div>


<form class="new-added-form">
<div class="row">

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Name: <span style="color:#FF0000;">*</span></label>
<input type="text" name="institute_name"  class="form-control">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>HOD Name: <span style="color:#FF0000;">*</span></label>
<input type="text" name="hod_name" class="form-control">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Admin Role: <small>(This Field Cannot Be Edited)</small> <span style="color:#FF0000;">*</span></label>
<input type="text" name="admin_role" class="form-control" readonly="">
</div>



<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>HOD Contact: <small>(This Field Cannot Be Edited)</small> <span style="color:#FF0000;">*</span></label>
<input type="text" name="hod_contact" class="form-control" readonly="">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Login ID: <small>(This Field Cannot Be Edited)</small> <span style="color:#FF0000;">*</span></label>
<input type="text" name="login_id" class="form-control" readonly="">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Registration ID: <span style="color:#FF0000;">*</span></label>
<input type="text" name="registration_id" class="form-control">
</div>

<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Email: <span style="color:#FF0000;">*</span></label>
<input type="email" name="institute_email" class="form-control">
</div>


<div class="col-xl-3 col-lg-6 col-12 form-group">
<label>Institute Address: <span style="color:#FF0000;">*</span></label>
<input type="text" name="institute_address" class="form-control">
</div>


<div class="col-lg-6 col-12 form-group mg-t-30">
<label class="text-dark-medium">Update Admin Profile Pic:</label>
<input type="file" name="avatar" class="form-control-file">
</div>

<div class="col-12 form-group mg-t-8">
<button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
<button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
</div>
</div>
</form>
</div>
</div>
<!-- Admit Form Area End Here -->



<?php 

$fetchDetails = mysqli_query("SELECT * FROM institute_registration ")

?>


<?php 

include('../master_content/admin_master/admin_footer.php');

?>