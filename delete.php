<?php
include 'connection.php';

$id=$_GET['id'];

$deletequery= "delete from users where id=$id";

$query=mysqli_query($con,$deletequery);

header('location:component.php');

if($query){

?>
<script>
alert("deleted successfully");
</script>

<?php
}else{
?>

<script>
alert("not deleted");
</script>

<?php

}


?>