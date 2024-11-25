<?php
$host='localhost';
$username='root';
$password='';
$db='BankingApp';
$conn=new mysqli($host,$username,$password,$db);
if($conn->connect_error){
    die("connection failed .$conn->connect_error");

}
?>