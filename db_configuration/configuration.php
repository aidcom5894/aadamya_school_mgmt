<?php 

$hostname = 'localhost';
$username = 'rootsdf';
$password = 'Admin1234#@';
$dbname = 'school_mgmt';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if(!$config)
{
	echo "Database Connection Failed with Error:". mysli_connect_error();
}
else
{
	echo "You have been successfully Connected to Database";
}

?>