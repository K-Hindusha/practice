<?php
include 'db.php';

$sql = "SELECT * FROM CUSTOMER";
$result = $conn->query($sql);

echo "<h3>Customer Information</h3>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>CID</th><th>CNAME</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["CID"] . "</td><td>" . $row["CNAME"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No customers found.";
}
?>
