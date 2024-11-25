<?php
include 'db.php';

$sql = "SELECT A.ANO, A.ATYPE, A.BALANCE, C.CNAME 
        FROM ACCOUNT A JOIN CUSTOMER C ON A.CID = C.CID";
$result = $conn->query($sql);

echo "<h3>Account Information</h3>";
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ANO</th><th>ATYPE</th><th>BALANCE</th><th>CNAME</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ANO"] . "</td><td>" . $row["ATYPE"] . "</td>
              <td>" . $row["BALANCE"] . "</td><td>" . $row["CNAME"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No accounts found.";
}
?>
