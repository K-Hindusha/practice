<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $atype=$_POST["atype"];
    $balance=$_POST["balance"];
    $cid=$_POST["cid"];
    $checkresults="SELECT * FROM customer WHERE cid='$cid'";
    $customer=$conn->query($checkresults);
    if($customer->num_rows>0){
        $sql = "INSERT INTO ACCOUNT(ATYPE,BALANCE,CID) VALUES ('$atype','$balance','$cid')";
        if($conn->query($sql)==TRUE){
            echo "account added successfully ";
        }
        else{
            echo("error: ".$conn->error);
        }}
        else {
            echo "Error: Customer with ID $cid does not exist.";
        }
}
?>
<form method="post">
    ATYPE(S or C):<input type="text" id="atype" name="atype" maxlength="1" required>
    Balance:<input type="text" id="balance" name="balance" required>
    Customer ID: <input type="text" id="cid" name="cid"  required>
    <button type="submit">ADD</button>
</form>