<?php
include "connection.php";

$query = "SELECT id, name FROM productname;";
$result = mysqli_query($conn, $query);
?>

<html>
<body>

<a href='insert.php'>Add</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>"; // Assuming you have a 'delete.php' to handle the delete action
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>
