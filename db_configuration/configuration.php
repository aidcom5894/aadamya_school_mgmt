<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'school_mgmt';

$config = mysqli_connect($hostname,$username,$password,$dbname);

if(!$config)
{
	echo "Database Connection Failed with Error:". mysqli_connect_error();
}
else
{
	echo "";
}

?>