<?php
$servername="localhost";
$username="root";
$password="";
$dbname="newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//fetch from database
$sql = "SELECT * from bookdb join user where user.id=bookdb.user_id";
$result = $conn->query($sql);

?>
<html>
</head>
<title>E-Library Display Section</title>
<link rel="stylesheet" type="text/css" href="css/display.css">
</head>
<body>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li><a href="index.php">E-Library</a></li>
		</ul>
	<div style="overflow-x:auto;">
	<h1>Books Available for Reading & Free Download</h1>
		<table width="100%" cellspacing="0" cellpadding="18">
				<div class="header">
					<th>Book Name</th>
					<th>Book Description</th>
					<th>Book Author</th>
					<th>Book Language</th>
					<th>Uploader Name</th>
					<th>Uploader Email</th>
					<th>Read / Download</th>
					<th>Rating</th>
				</div>	
					<tr>
						<?php
							while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>".$row['bookname']."</td>";
							echo "<td>".$row['bookdesc']."</td>";
							echo "<td>".$row['bookauthor']."</td>";
							echo "<td>".$row['booklang']."</td>";
							echo "<td>".$row['username']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td><a href='http://localhost/Elibrary/files/".$row['bookfile']."'><b>E-Book</b></a></td>";
							echo "<td>".$row['rating']."</td>";
							echo "</tr>";
							}
						?>
		</table>
	</div>
</body>
</html>
