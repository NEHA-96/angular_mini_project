<?php 
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "abc";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection has problems ".mysqli_connect_error());
}
//echo "connection available";
?>