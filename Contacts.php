<!DOCTYPE html>
<html>
<head>
	<title>ADBMS - Contact</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="ContactsCSS.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>
<body>
	
  <!--NavBar-->
  <nav class="nav">
			   <div class="nav-logo">
				   <p>ADBMS</p>
			   </div>
			   
			   <div class="nav-menu" id="navMenu">
				   <ul>
					   <li><a href="welcome.html" class="link ">Home</a></li>
					   <li><a href="Booking.php" class="link">Booking</a></li>
					   <li><a href="About.php" class="link">About</a></li>
					   <li><a href="Contacts.php" class="link active">Contact Us</a></li>
				   </ul>
			   </div>
			   <div class="nav-button">
				   <button class="btn white-btn" id="loginBtn" onclick="window.location.href='login.php';">Sign In</button>
				   <button class="btn" id="registerBtn" onclick="window.location.href='login.php';">Sign Up</button>
			   </div>
		   </nav>
  <!--NavBar End-->


	<div id="signup" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">SignUp</h4>
	      </div>
	      <div class="modal-body">
	      	<label for="username">Username:</label>
	        <input type="text" name="username" placeholder="Username" id="username">
	        <br>
	        <label for="email">Email ID:</label>
	        <input type="email" name="emailid" placeholder="Email Id" id="email">
	        <br>
	        <label for="pass">Password:</label>
	        <input type="password" name="password" id="pass">
	        <br>
	        <label for="confpass">Confirm Password:</label>
	        <input type="password" name="confpassword" id="confpass">
	        <br>
	        <input type="Submit" name="submit">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>


	<div id="login" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Login</h4>
	      </div>
	      <div class="modal-body">
	        <label for="username">Username:</label>
	        <input type="text" name="username" placeholder="Username" id="username">
	        <br>
	        <label for="pass">Password:</label>
	        <input type="password" name="password" id="pass">
	        <br>
	        <input type="Submit" name="submit">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<h1>Contact Us</h1>

	<div id="first">
		<h2>Contact Us</h2>
		<p>Feel free to reach out to us for any inquiries, support, feedback, or assistance you may need. Our contact page is designed to make it easy for you to get in touch with us.
</p>
		<p>You can use the contact form provided, which includes fields for your name, email, subject, message, and more. Simply fill out the form, and we'll respond to you promptly.
</p>
		<p id="space"></p>
	
		<hr>
		<h2>Alternatively, you can reach us using the following contact information:</h2>
		<p>- Phone numbers: [9999999999]</p>
		<p>- Email addresses: [groupno3@gmail.com]</p>
		<p>- Physical Address: [Upes bidholi]</p>
		<hr>
		<h2>Note:</h2>
		<p>We value your input and are here to assist you in any way we can. Don't hesitate to reach out, we're just a message or call away!</p>
	</div>

	<div id="second">
		<h2 id="space2">Feedback Form</h2>
		<form method="POST">
		<input type="text" name="name" placeholder="Name" size="55">
		<br>
		<br>
		<input type="email" name="email" placeholder="Email-Id" size="55" >
		<br>
		<br>
		<input type="text" name="subject"  placeholder="Subject" size="55">
		<br>
		<br>
		<input type="text" name="message" rows="55" cols="59" placeholder="Message" size="55">
		<br>
		<br>
		<input type="Submit" name="submit" id="submitSignUp" value="SUBMIT">
		</form>
	</div>
</body>
</html>


<?php
	if(isset($_POST[ 'submit' ]))
		{
		$name=$_POST['name'];
		$eml=$_POST['email'];
		$sub=$_POST['subject'];
		$msg=$_POST['message'];

        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $db="gdcairways";
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
		
          $sql="INSERT INTO feedback (`name`, `email`, `subject`, `message`) VALUES ('$name', '$eml', '$sub', '$msg')";
        mysqli_query($conn,$sql);
          
		}
?>

