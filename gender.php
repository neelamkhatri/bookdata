<?php 
include'connection.php';

if(isset($_POST['search']))
{
$txtStartDate=$_POST['txtStartDate'];
$txtEndDate=$_POST['txtEndDate'];

$query=mysqli_query($con,"select username from users where date between '$txtStartDate' and '$txtEndDate' order by date  ");
$count=mysqli_num_rows($datequery);


}



?>

<form>

<input type="date" name="txtStartDate">
<input type="date" name="txtEndDate">
<br>
<br>
<p>
<input type="submit" name="search" value="search student..!">
</p>
</form>

  <?php 
  if($count=="0")
  
  {
  echo'<h2>No Student name found!</h2>';
  
  }
  else
  {
  
  while($row=mysqli_fetch_array($query)){
  
  
  $result=$row['username'];
  $output='<h2>'.$result.'</h2>';
  echo $output;
  }
  }
  ?>