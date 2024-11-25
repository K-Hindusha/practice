<?php
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cname=$_POST["cname"];
        $sql = "INSERT INTO CUSTOMER(CNAME) VALUES ('$cname')";
        if($conn->query($sql)==TRUE){
            $new_cid=$conn->insert_id;
            echo("customer is added successfully with id : $new_cid");
        }
        else{
            echo("error: ".$conn->error);
        }

    }

?>

<form method="post">
    <h3>Add Customer</h3>
    Customer Name: <input type="text" id="cname" name="cname" required>
    <button type="submit">Submit</button>

</form>