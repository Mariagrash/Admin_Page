<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="admindashboard.php">Go to Home</a>
	<br/><br/>

	<form action="Add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
			   <td>Address</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>Confirm Password</td>
				<td><input type="text" name="comfirmpassword"></td>
			</tr>
			<tr> 
				<td>User Type</td>
				<td><input type="text" name="user_type"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	
	if(isset($_POST['Submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$user_type = $_POST['user_type'];
		
	
		include_once("config.php");
				

		$result = mysqli_query($conn, "INSERT INTO user(firstname,lastname,email,address,password,confirmpassword,user_type) VALUES('$firstname','$lastname','$email','$address','$password','$confirmpassword','$user_type')");
		

		echo "User added successfully. <a href='admindashboard.php'>View Users</a>";
	}
	?>
</body>
</html>
