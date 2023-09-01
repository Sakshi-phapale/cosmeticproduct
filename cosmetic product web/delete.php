<?php 

include "connection.php";

$id=$_GET['id'];

$query="delete from productname where id='$id'; ";
$result=mysqli_query($conn,$query);

if($result==true){
    header("Location: display1.php"); // Redirect to a success page




}







?>



