<?php
include "connection.php";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Update the product information in the database
        $newName = $_POST['new_name'];
        $newPrice = $_POST['new_price'];

        $updateQuery = "UPDATE productname SET name='$newName', price='$newPrice' WHERE id='$product_id'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            echo "Product information updated successfully.";
        } else {
            echo "Error updating product information: " . mysqli_error($conn);
        }
    }

    $selectQuery = "SELECT name, price FROM productname WHERE id='$product_id'";
    $selectResult = mysqli_query($conn, $selectQuery);
    $productData = mysqli_fetch_assoc($selectResult);
} else {
    echo "Invalid product ID.";
    exit;
}
?>

<html>
<body>
<h2>Update Product Information</h2>
<form method="post">
    <label for="new_name">New Name:</label>
    <input type="text" name="new_name" value="<?php echo $productData['name']; ?>"><br><br>

    <label for="new_price">New Price:</label>
    <input type="text" name="new_price" value="<?php echo $productData['price']; ?>"><br><br>

    

    <input type="submit" value="Update">
</form>
<br>
<a href="display1.php">Back to Products</a>
</body>
</html>

<?php
mysqli_close($conn);
?>
