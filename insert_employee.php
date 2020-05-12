<?php


$con=mysqli_connect("db.sice.indiana.edu","i495u20_gpkramer","my+sql=i495u20_gpkramer", "i495u20_gpkramer");
// Check connection
if (mysqli_connect_errno())
{echo nl2br("Failed to connect to MySQL: " . mysqli_connect_error() . "\n "); }
else
{ echo nl2br("Established Database Connection \n");}


$email = mysqli_real_escape_string($con, $_POST['email']);
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$admin = mysqli_real_escape_string($con, $_POST['admin']);
$active = mysqli_real_escape_string($con, $_POST['active']);

$sql="INSERT INTO employee (email, first_name, last_name, phone, admin, active)
	VALUES ('$email', '$first_name', '$last_name', '$phone', '$admin', '$active')";

if (!mysqli_query($con,$sql))
{ die('Error: ' . mysqli_error($con)); }

mysqli_close($con);


?>
