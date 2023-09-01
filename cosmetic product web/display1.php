<?php
include "connection.php";

$query = "SELECT id, name, price FROM productname;";
$result = mysqli_query($conn, $query);
?>

<html>

<style>
    /* Style the entire table */
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

/* Style the table header (th) */
th {
  background-color: #f2f2f2;
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

/* Style the table rows (even and odd) */
tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:nth-child(odd) {
  background-color: #ffffff;
}

/* Style the table cells (td) */
td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

/* Add hover effect to table rows */
tr:hover {
  background-color: #c0c0c0;
}

</style>
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
            echo "<td>" . $row['price'] . "</td>";

            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>"; // Assuming you have a 'delete.php' to handle the delete action
            
            echo "<td><a href='update.php?id=" . $row['id'] . "'>update</a></td>"; // Assuming you have a 'delete.php' to handle the delete action

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
mysqli_close($conn);
?>
