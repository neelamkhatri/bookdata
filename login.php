<?php

include'connection.php';

$email=$_GET['email'];
$phone=$_GET['phone'];
$password=$_GET['password'];

$sql="select * from neelu where(email='$email' AND password='$password') OR (phone='$phone' AND password='$password') ";

$result=mysqli($con,$sql);

$row=mysqli_num_rows($result);

echo $row;
?>