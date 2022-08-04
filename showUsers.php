<?php
include('connection.php');
?>
<html>
<head>
	<title>show users</title>
</head>
<body>
	<table border="2">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		$sql = "SELECT * FROM signup";
		$data = mysqli_query($conn,$sql);
		$total = mysqli_num_rows($data);
		if($total !=0){
			while($result = mysqli_fetch_array($data)){	
		?>
		<!--   code in between php tags are inside while loop-->
		<tr>
			<td><?php echo $result['name'] ?></td>
			<td><?= $result['email'] ?></td>
			<td><?= $result['password'] ?></td>
			<td><a href="update.php?id=<?php echo $result['signup_id']?>">Update</a></td>
			<td><a href="delete.php?id=<?= $result['signup_id'] ?>">Delete</td>
		</tr>
		<?php
		}
		}else{
			echo "no record found";
		}
	?>
	</table>
</body>
</html>