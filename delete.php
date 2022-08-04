<?php
include('connection.php');
$id = $_GET['id'];
$sql = "DELETE  FROM signup WHERE signup_id='$id'";
$query = mysqli_query($conn,$sql);
if($query){
	header('location: showUsers.php');
}else{
	echo "error";
}
?>
