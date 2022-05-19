<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="index.php">E-Library</a></li>
		</ul>
		<div class="form-style-6">
			<h1>E-Library Book Portal</h1>
				<form method="POST" action="">
					<input type="text" id="username" name="username" placeholder="UserName*" required/>
					<input type="text" id="password" name="password" placeholder="password" required/>
					<input type="submit" id="submit" name="submit">
			</form>
			<a href="register.php">Register Here</a>
		</div>
	</body>
</html>

<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $servername="localhost";
$username="root";
$password="";
$dbname="newdb";

//Create Connection
$con=new mysqli($servername, $username, $password, $dbname);
        $result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        } else {
         echo '<script type="text/javascript">'; 
	echo 'alert("username or password wrong");'; 
	echo 'window.location.href = "index.php";';
	echo '</script>';
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:dashboard.php");
    }
?>
 
