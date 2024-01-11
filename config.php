<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "data_login";

$conn = mysqli_connect($server, $pass, $database);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}
?>