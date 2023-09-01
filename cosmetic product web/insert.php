<?php
include "connection.php";

if(isset($_POST["submit"])) {
    $pname = $_POST['product'];
$price=$_POST['price'];
    $query="insert into productname(name,price) value('$pname','$price');";
    $result=mysqli_query($conn,$query);

}



?>

<html>
<body>

<a href="display1.php"> Display product</a>
    <form method='POST'>
        <label>Productname</label>
        <input type="text" name="product" /><br>


<label>Price</label>
        <input type="text" name="price" />
        <input type="submit" name='submit'/>
    </form>
</body>
</html>
