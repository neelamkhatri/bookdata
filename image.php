<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Typa" content="text/html; charset=utf-8" />
<title>upload image</title>


<?php

include'connection.php';


if (isset($_POST['submit'])){
$username=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$file=$_FILES['photo'];

//print_r($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];

if($fileerror==0){

$destfile='upload/'.$filename;

//echo"$destfile";



move_uploaded_file($filepath,$destfile);

$insertquery="insert into users(username,email,mobile,degree,pic) values('$username','$email','$mobile','$degree','$destfile')";

$query=mysqli_query($con,$insertquery);





}else{

echo"No button has been clicked";
}
}
?>


