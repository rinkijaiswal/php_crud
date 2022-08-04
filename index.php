<?php
include('connection.php');
if(isset($_GET['signup'])){
	$name = $_GET['name'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$sql = "INSERT INTO signup(name,email,password) VALUES('$name','$email','$password')";
	$query = mysqli_query($conn,$sql);
	if($query){
		header('location:showUsers.php');
	}else{
		echo "unsuccessfull";
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="name" placeholder="Enter Name"><br><br>
	<input type="text" name="email" placeholder="Enter Email"><br><br>
	<input type="password" name="password" placeholder="Enter password"><br><br>
	<button type="submit" name="signup">submit</button>
</form>
</body>
</html>