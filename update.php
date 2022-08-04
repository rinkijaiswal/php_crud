<?php
include('connection.php');
//id from url
$id = $_GET['id'];
// taken data from the id
$query = mysqli_query($conn,$sql);
//saved in result variable
$result = mysqli_fetch_array($query);


//update 
if(isset($_POST['signup'])){
	$signupId = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "UPDATE signup SET name='$name',email='$email',password='$password' WHERE signup_id = '$signupId' ";
	$query = mysqli_query($conn,$sql);
	if($query){
		header('location:showUsers.php');
	}else{
		echo "unsuccessfull";
	}
}
?>
<html>
<body>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $result['signup_id'] ?>">
	<input type="text" name="name" placeholder="Enter Name" value="<?= $result['name'];?>"><br><br>
	<input type="text" name="email" placeholder="Enter Email" value="<?= $result['email'];?>"><br><br>
	<input type="text" name="password" placeholder="Enter password" value="<?= $result['password'];?>"><br><br>
	<button type="submit" name="signup">submit</button>
</form>
</body>
</html>