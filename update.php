

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>update</title>

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
     <form action="" method="POST" class="w-50">
         
         <?php 
include "connection.php";

$ids= $_GET['id'];

$showquery= "select * from users where id={$ids}";

$showdata=mysqli_query($con,$showquery);

$arrdata=mysqli_fetch_array($showdata);



if (isset($_POST['submit'])){

$idupdate= $_GET['id'];


$username=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$date=$_POST['date'];
$gender=$_POST['gender'];

//$insertquery="insert into users(username,email,mobile,degree) values('$username','$email','$mobile','$degree')";

$query="update users set id=$idupdate, username='$username',email='$email',mobile='$mobile',degree='$degree',date='$date',gender='$gender' where id=$idupdate;";

$res=mysqli_query($con,$query);



if ($res){
?>
<script>
alert ("Data updated properly");
</script>
<?php
}else{
?>
<script>
alert("Data not updated");
</script>
<?php
}
}
?>
     
     
       <div class="pt-2">
       <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-id-badge"></i>          </div>
          </div>
        <input type="text" class="form-control" name="user"  value="<?php echo $arrdata['username'];?>"id="inlineFormInputGroup" placeholder="User name">
          </div>
          </div>
       <div class="pt-2">
       
       <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-envelope"></i>     </div>
          </div>
        <input type="text" class="form-control" name="email" value="<?php echo $arrdata['email'];?>" id="inlineFormInputGroup" placeholder="email">
          </div>
       </div>
 
        
        
        <div class=" pt-2">
        
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-mobile-alt"></i></div>
         </div> 
        <input type="text" class="form-control" name="mobile" value="<?php echo $arrdata['mobile'];?>" id="inlineFormInputGroup" placeholder="mobile">
          </div>
        
        </div>
        
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-graduation-cap"></i>  </div>
          </div>
        <input type="text" class="form-control" name="degree" value="<?php echo $arrdata['degree'];?>" id="inlineFormInputGroup" placeholder="degree">
          
        </div>
        </div>
        
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          <div class="input-group-text bg-warning"><i class="fas fa-calendar-day"></i>  </div>
          </div>
        <input type="date" class="form-control" name="date" value="<?php echo $arrdata['date'];?>" id="inlineFormInputGroup" placeholder="date">
          
        </div>
        </div>
        
        <div>
        <div class="pt-2">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
          
          </div>
        
        Gender:
    <input type="radio" id="contactChoice1"
     name="gender" class="form-control" value="<?php echo $arrdata['gender'];?>">
    <label for="contactChoice1" style="font-size:18px">Female</label>

    <input type="radio" id="contactChoice2"
     name="gender" class="form-control" value="<?php echo $arrdata['gender'];?>">
    <label for="contactChoice2" style="font-style:normal">Male</label>

    <input type="radio" id="contactChoice3"
     name="gender" class="form-control" value="<?php echo $arrdata['gender'];?>">
    <label for="contactChoice3">Other</label>
  </div>
  </div>
  </div>
        
        
        
              <div class="d-flex justify-content-center" style="margin-top:5%; margin-bottom:5%">
            <input type="submit" class="btn-success" value="UPDATE"  name="submit" >
            
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



