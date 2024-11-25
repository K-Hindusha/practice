<?php
include 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cid = $_POST['cid'];  // Get the CID from the form
    $cname = $_POST['cname'];  // Get the new customer name from the form

    // Check if CID exists in the database
    $result = $conn->query("SELECT * FROM CUSTOMER WHERE CID = $cid");
    if ($result->num_rows > 0) {
        // If CID exists, update customer name
        $sql = "UPDATE CUSTOMER SET CNAME = '$cname' WHERE CID = $cid";
        if ($conn->query($sql) === TRUE) {
            echo "Customer updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Customer with ID $cid not found.";
    }
}
?>

<form method="post">
    <h3>Update Customer</h3>
    
    <!-- Input for Customer ID -->
    <label for="cid">Customer ID:</label>
    <input type="number" id="cid" name="cid" required>
    <br><br>

    <!-- Input for Customer Name -->
    <label for="cname">Customer Name:</label>
    <input type="text" id="cname" name="cname" required>
    <br><br>

    <button type="submit">Update</button>
</form>
