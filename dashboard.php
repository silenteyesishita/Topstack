<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div align="right">
		<ul>
				<li><a href="#">Welcome : <?php echo $_SESSION['username']; ?></a></li>
	
		  <li><a href="index.php">Home</a></li>
		  
		  <li><a href="displaydata.php">E-Library</a></li>
		  <li><a href="logout.php">logout</a></li>
		</ul>
	</div>
		<div class="form-style-6">
			<h1>E-Library Book Portal</h1>
				<form method="POST" action="connection.php" enctype="multipart/form-data" onsubmit="return validate(this)">
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['id']; ?>"/>
					<input type="text" id="name" name="bookname" placeholder="Book Name*" required/>
					<textarea cols="25" rows="4" name="bookdesc" placeholder="Book Description*" required></textarea>
					<input type="text" id="password" name="bookauthor" placeholder="Book Author*"/ required>
					<select name="booklang" required>
						  <option selected disabled>Select Book Language*</option>
						  <option value="English">English</option>
						  <option value="Bengali">Bengali</option>
						  <option value="Hindi">Hindi</option>
						  <option value="German">German</option>
						  <option value="French">French</option>
						  <option value="Other">Other Language</option>
					</select>
					<div style="padding-bottom: 6px"><label>Select Book* (Only Pdf, Doc & Docx files are allowed)</label></div>
					
					
					<input type="file" name="bookfile" id="bookfile" required/>

					<br>
					<div style="padding-bottom: 6px"><label>Give Rating</label></div>
					<input type="radio" id="rating" name="rating" value="1" required>
					<label for="age1">1</label><br>
					<input type="radio" id="rating" name="rating" value="2" required>
					<label for="age1">2</label><br>
					<input type="radio" id="rating" name="rating" value="3" required>
					<label for="age1">3</label><br>
					<input type="radio" id="rating" name="rating" value="4" required>
					<label for="age1">4</label><br>
					<input type="radio" id="rating" name="rating" value="5" required>
					<label for="age1">5</label><br>

					<input type="submit" id="submit" name="submit">
			</form>
		</div>
	</body>
</html>
 <script>
    function validate() {
    var val = document.getElementById('bookfile').value.toLowerCase();
    var regex = new RegExp("(.*?)\.(docx|doc|pdf)$");
        if(!(regex.test(val))) {
            document.getElementById('bookfile').value = '';
            alert('Please select correct file format.');
            return false;   
        }
		return true;
		}
</script>
