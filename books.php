

<!DOCTYPE html>
<html lang="en">
<head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["user"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
 
  }
  
 function validateForm() { 
  var x = document.forms["myForm"]["mobile"].value;
  if (x == "" || x == null) {
    alert("mobile number must be filled out");
    return false;
  }
  
}

function validateForm() { 
  var x = document.forms["myForm"]["gender"].value;
  if (x == "" || x == null) {
    alert("gender must be filled out");
    return false;
  }
  
}


</script>

<script type="text/javascript">

function validatephonenumber(vals){

var R=/^\(?([0-9]{3})\)?[-.]?([0-9]{3})[-.]?([0-9]{4})$/;

var t=R.exec(vals.value);

if(!t){

alert("isn't valid");

}
}

</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Books</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" type="text/css" href="../projectphp/font-awesome.min.css">
<link rel="stylesheet" href="bookstyle.css">
<link rel=""
</head>

<body>

<main>
<div class="container text-center" >

<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
   <div class="d-flex justify-content-center">
     <form action="" method="post" class="w-50" name="myform" enctype="multipart/form-data">
       <div class="pt-2">
       <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i>          </div>
          </div>
        <input type="text" class="form-control" name="user" id="inlineFormInputGroup" placeholder="User name" onsubmit="return validateForm()" required >
          </div>
          </div>
       <div class="pt-2">
       
       <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-envelope"></i>     </div>
          </div>
        <input type="text" class="form-control" name="email" id="inlineFormInputGroup" placeholder="email">
          </div>
       </div>
 
        
        
        <div class=" pt-2">
        
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-mobile-alt"></i></div>
         </div> 
        <input type="text" class="form-control" name="mobile" onChange="validatephonenumber(this);" id="inlineFormInputGroup" placeholder="mobile" onsubmit="return validateForm()" required  >
          </div>
        
        </div>
        
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-graduation-cap"></i>  </div>
          </div>
        <input type="text" class="form-control" name="degree" id="inlineFormInputGroup" placeholder="degree">
          
        </div>
        </div>
        
        
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-calendar-day"></i>  </div>
          </div>
        <input type="date" class="form-control" name="date" id="inlineFormInputGroup" placeholder="">
          
        </div>
        </div>
        
        
        
        
        
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"> <i class="fas fa-file"></i>  </div>
          </div>
        <input type="file" class="form-control" name="photo" id="inlineFormInputGroup" placeholder="">
          
        </div>
        </div>
        
        <div>
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          
          </div>
        
        Gender:
    <input type="radio" id="contactChoice1"
     name="gender" class="form-control" value="female"onsubmit="return validateForm()" required>
    <label for="contactChoice1" style="font-size:18px">Female</label>

    <input type="radio" id="contactChoice2"
     name="gender" class="form-control" value="male"onsubmit="return validateForm()"required>
    <label for="contactChoice2" style="font-style:normal">Male</label>

    <input type="radio" id="contactChoice3"
     name="gender" class="form-control" value="other"onsubmit="return validateForm()"required>
    <label for="contactChoice3">Other</label>
  </div>
  </div>
  </div>
        
        
        
        
              <div class="d-flex justify-content-center" style="margin-top:5%; margin-bottom:5%">
            <input type="submit" class="btn-success"  name="submit" >
            
              </div>
              <div class="d-flex justify-content-center" style="margin-top:5%; margin-bottom:5%">
         <a href="component.php">   <button type="button">Checked form</button></a>
            
              </div>
       
        
        
          
     </form>
     
   
       </div>
       
       
       
       
       </div>
</main>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>


<?php 
include "connection.php";

if (isset($_POST['submit'])){
$username=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$file=$_FILES['photo']; 


$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];



$destfile='upload/'.$filename;

//echo"$destfile";



move_uploaded_file($filepath,$destfile);

$insertquery="insert into users(username,email,mobile,degree,date,gender,pic) values('$username','$email','$mobile','$degree','$date','$gender','$destfile')";


$res=mysqli_query($con,$insertquery);


if ($res){
?>
<script>
alert ("Data inserted properly");
</script>
<?php
}else{
?>
<script>
alert("Data not inserted");
</script>
<?php
}
}
?>


<?php

  $mobile = '';
  if(array_key_exists('mobile', $_POST))
  {
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['mobile']))
    {
      $error = 'Invalid Number!';
    }
  }

?>





