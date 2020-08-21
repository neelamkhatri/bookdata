

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>insert</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../projectphp/font-awesome.min.css">
<link rel="stylesheet" href="bookstyle.css">
</head>

<body>

<main>
<div class="container text-center" >

<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1><br><br>
   
  
<input type="text" Id="myInput"  placeholder="Search for names.." style="margin-right:45%" onKeyUp="searchFun()">
  
  <select name="filter_degree" style="margin-left:10%" >
  
  <option value="select">Select Degree</option>
  <option value="1">bsc</option>
  <option value="2">mba</option>
  <option value="3">bca</option>
  <option value="4">mca</option>
  
  
  
  
  </select>
  
  
  
  
  <select name="value"  >
  <option value="">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  
  
  
  
  </select>
  
 
  <!--<form method="POST">
   
        <form Id="myInput" onKeyUp="searchFun()" > 
            <div>
                <p>
    Search By name: <input type="text" name="search_username" />
    Search By degree: <input type="text" name="search_degree" />
    Search By gender: <input type="TEXT" name="search_gender" /> 
<input type="submit" name="submit_name" value="Search >>" />
                </p>
            </div>
</form>-->


<div style="margin-right:8%">

From Date:  <input type="date" name="fromdate" value="fromdate">
TO Date:  <input type="date" name="todate" value="todate">
<br><br>
<p>
<input type="button" name="filter" value="filter" style="background-color:#0080FF; color:#FFFFFF">
</p>

</div>





  
       
       <div class="d-flex table-data" >
       <div class="table-responsive">
       <table class="table table-striped table-dark" style="margin-top:5%"  Id="myTable" >
       <thead class="thead-dark" >
       <tr>
       <th>ID</th>
       <th>user Name</th>
       <th>email</th>
       <th>mobile</th>
       <th>degree</th>
       <th>date</th>
       <th>Gender</th>
       <th colspan="2">operation</th>
       <th>Pic</th>
       </tr>
       </thead>
       
       <tbody>
       
       
       <?php
include 'connection.php';


$selectquery="select * from users order by username asc";

$query= mysqli_query($con,$selectquery);

$nums=mysqli_num_rows($query);

$res=mysqli_fetch_array($query);

while($res=mysqli_fetch_array($query)){

?>

<tr>
       <td><?php echo $res['id'];?></td>
       <td><?php echo $res['username'];?></td>
       <td><?php echo $res['email'];?></td>
       <td><?php echo $res['mobile'];?></td>
       <td><?php echo $res['degree'];?></td>
       <td><?php echo $res['date'];?></td>
       <td><?php echo $res['gender'];?></td>
       
       
       
       <td><a href="update.php?id=<?php echo $res['id'];?> " data-toggle="tooltip" data-placement="bottom" title="UPDATE" ><i class="fas fa-edit" style="color:#009D00"></i></a></td>
       
       <td><a href="delete.php?id=<?php echo $res['id'];?> " data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fas fa-trash" style="color:#F20000" ></i></a></td>
       
       <td><img src="<?php echo $res['pic'];?>" width="100" height="50"></td>
       
       </tr>
       
       <?php
}

?>

      
       </tbody>
       
       </table>
       </div>
       </div>
       </div>
       
</main>

<script>

const searchFun=()=>{
let filter =document.getElementById('myInput').value.toUpperCase();

let myTable=document.getElementById('myTable');

let tr=myTable.getElementsByTagName('tr');

for (var i=0; i<tr.length; i++){

let td=tr[i].getElementsByTagName('td')[1];


if(td){

let textvalue=td.textcontent || td.innerHTML;

if(textvalue.toUpperCase().indexOf(filter)>-1){
tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      

}


}

}

}

</script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>




</body>
</html>


