<?php

include_once("config.php");


if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$firstname = $_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$password = $_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$user_type=$_POST['user_type'];
		

	$result = mysqli_query($conn, "UPDATE user SET firstname='$firstname',lastname='$lastname',email='$email',address='$address',password='$password',confirmpassword='$confirmpassword',user_type='$user_type' WHERE id=$id");
	

	header("Location: admindashboard.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$firstname = $user_data['firstname'];
	$lastname = $user_data['lastname'];
	$email = $user_data['email'];
	$address = $user_data['address'];
	$password = $user_data['password'];
	$confirmpassword = $user_data['confirmpassword'];
	$user_type = $user_data['user_type'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname" value=<?php echo $firstname;?>></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname" value=<?php echo $lastname;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
			<tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" value=<?php echo $address;?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value=<?php echo $password;?>></td>
			</tr>
			<tr> 
				<td>Confirm Password</td>
				<td><input type="text" name="confirmpassword" value=<?php echo $confirmpassword;?>></td>
			</tr>
			<tr> 
				<td>User Type</td>
				<td><input type="text" name="usertype" value=<?php echo $user_type;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

