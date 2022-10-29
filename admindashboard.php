<?php
	include 'config.php';


session_start();

if(isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
$result = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC");




?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="Add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Address</th><th>Password</th> <th>Confirm Password</th> <th>User Type</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['firstname']."</td>";
        echo "<td>".$user_data['lastname']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['address']."</td>";
        echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['confirmpassword']."</td>";
        echo "<td>".$user_data['user_type']."</td>";   
        echo "<td><a href='Edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

    <div class="content">
        <h3>hi<span>admin</span></h3>
        <h1>welcome<span><?php echo $_SESSION['admin_name']?></span></h1>
        <p>This is an admin page</p>
        <a href="login_form.php"  class="btn">Login</a>
        <a href="register_form.php"  class="btn">Register</a>
        <a href="logout.php"  class="btn">Log Out</a>
    </div>
    </div>
    
</body>
</html> -->