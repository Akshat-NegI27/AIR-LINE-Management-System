<!DOCTYPE html>
<html>
<head>
	<title>ADBMS - Booking</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Paytone+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="BookCSSnew.css">
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
					   <li><a href="Book.php" class="link active">Booking</a></li>
					   <li><a href="About.php" class="link">About</a></li>
					   <li><a href="Contacts.php" class="link">Contact Us</a></li>
				   </ul>
			   </div>
			   <div class="nav-button">
				   <button class="btn white-btn" id="loginBtn" onclick="window.location.href='login.php';">Sign In</button>
				   <button class="btn" id="registerBtn" onclick="window.location.href='login.php';">Sign Up</button>
			   </div>
		   </nav>
   	<!--NavBar End-->

  	<!--SingUp Modal-->
	  <div id="signup" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	      <!--SignUp Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">SignUp</h4>
	        </div>
	        <div class="modal-body">
	          	<label for="username">Username:</label>
	            <input type="text" name="usernameSignUp" placeholder="Username" id="usernameSignUp">
	            <br>
	            <label for="email">Email ID:</label>
	            <input type="email" name="emailid" placeholder="Email Id" id="email">
	            <br>
	            <label for="pass">Password:</label>
	            <input type="password" name="passwordSignUp" id="passSignUp">
	            <br>
	            <label for="confpass">Confirm Password:</label>
	            <input type="password" name="confpassword" id="confpass">
	            <br>
	            <input type="Submit" name="submit" id="submitSignUp">
	            <br>
	            <br>
	            <span id="messagecheck1"></span>
	            <br>
	            <span id="messagecheck2"></span>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      <!--SignUp Modal content End-->
	    </div>
	  </div>
	  <!--SignUp Modal End-->

	  <!--Login Modal-->
	  <div id="login" class="modal fade" role="dialog">
	    <div class="modal-dialog">
	      <!--Login Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Login</h4>
	        </div>
	        <div class="modal-body">
	          <label for="username">Username:</label>
	          <input type="text" name="usernameLogin" placeholder="Username" id="usernameLogin">
	          <br>
	          <label for="pass">Password:</label>
	          <input type="password" name="passwordLogin" id="passLogin">
	          <br>
	          <input type="Submit" name="submit">
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      <!--Login Modal Content End-->
	    </div>
	  </div>
	  <!--Login Modal End-->

	  <div class="container">
	  	<form id="fsty" method="POST">
	  		<label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name" id="name">
            <br>
            <label for="male">Male: </label>
            <input type="radio" name="gender" value="male" id="male">
            <br>
            <label for="female">Female: </label>
            <input type="radio" name="gender" value="female" id="female">
            <br>
            <label for="DOB">DOB: </label>
            <input type="date" name="dob" id="DOB">
            <br>
            <label for="mobno">Mobile No: </label>
            <input type="telno" name="mobno" id="mobno">
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="eml">
            <br>
            <label for="type">Class: </label>
            <select name="type">
            	<option value="Economy">Economy</option>
            	<option value="Business">Business</option>
            </select>
            <br>

            <input type="hidden" name="varname2" value="<?php echo $_GET['varname']; ?>">
            <br>
            <input type="submit" name="submit">
	  	</form>
	  </div>

	  

</body>
</html>

<?php
				error_reporting(0);
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$db="gdcairways";
				$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$conn)
				{
					echo "Connection was failed".mysqli_connect_error();
				}
				$tickno=rand(3500,4000);
				$tickno=mysqli_real_escape_string($conn,$tickno);
				$passid=rand(1,50);
				$passid=mysqli_real_escape_string($conn,$passid);
				$name=$_POST['name'];
				$name=mysqli_real_escape_string($conn,$name);
				$gender=$_POST['gender'];
				$gender=mysqli_real_escape_string($conn,$gender);
				$dob=$_POST['dob'];
				$dob=mysqli_real_escape_string($conn,$dob);
				$mobno=$_POST['mobno'];
				$mobno=mysqli_real_escape_string($conn,$mobno);
				$email=$_POST['email'];
				$email=mysqli_real_escape_string($conn,$email);
				$type=$_POST['type'];
				$type=mysqli_real_escape_string($conn,$type);
				$varname2=$_POST['varname2'];
				$varname2=mysqli_real_escape_string($conn,$varname2);
	  			
	  
				if($_POST['submit'])
				{
					$sql="Insert into passenger values('".$passid."','".$name."','".$gender."','".$dob."','".$mobno."','".$email."')";
					$sqltick="Insert into ticket values('".$tickno."','".$passid."','".$varname2."','".$type."','1')";
					if(mysqli_query($conn,$sql))
					{
						if(mysqli_query($conn,$sqltick))
						{
							echo "<h1 style='margin-left:200px;color:white;'>Your Ticket Has Been Booked!!</h1>";
							echo "<br><h2 style='margin-left:200px;color:white;'>Passenger ID = ".$passid."</h2>";
							echo "<br><h2 style='margin-left:200px;color:white;'>Ticket Number = ".$tickno."</h2>";
							echo "<a href='index.php#menu1' style='margin-left:200px;color:white;'>Click Here To See Ticket</a>";
						}
						else
						{
							echo "Something Went Wrong";
						}
					}
					else
					{
						echo "Something Went Wrong";
					}
				}

?>