<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connection</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="crud";
// Create connection
$con = new mysqli($servername, $username, $password,$db);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

?>

</body>
</html>
