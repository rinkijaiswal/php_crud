<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "product";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
	echo "connection successfull";
}
else{
	echo "error ocurred";
}

$conn = mysqli_connect("localhost","root","","product") or die("connection failed");

?>