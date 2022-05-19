<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="index.php">E-Library</a></li>
		</ul>
		<div class="form-style-6">
			<h1>E-Library Book Portal</h1>
				<form method="POST" action="" enctype="multipart/form-data">
					<input type="text" id="username" name="username" placeholder="UserName*" required/>
					<input type="text" id="password" name="password" placeholder="password" required/>
					<input type="text" id="phone" name="phone" placeholder="phone" required/>
					<input type="email" id="email" name="email" placeholder="Email" required/>
					<input type="submit" id="submit" name="submit">
					<br>
					<br>
					if You are already Registerd <a href="index.php">Login here</a>
			</form>
		</div>
	</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";

//Create Connection
$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//get values from form
if (isset($_POST['submit'])) {

$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

//Insert Values
$sql = "INSERT INTO user (username, password, phone, email) 
VALUES ('$username', '$password', '$phone', '$email')";

//To check whether data is inserted properly or not
if ($conn->query($sql) === TRUE) {
	echo '<script type="text/javascript">'; 
	echo 'alert("You have registered successfully.");'; 
	echo 'window.location.href = "login.php";';
	echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

 
