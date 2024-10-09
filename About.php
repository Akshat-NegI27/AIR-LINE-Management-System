<!DOCTYPE html>
<html>
<head>
	<title>ADBMS - About</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="AboutCSS.css">
  <link rel="stylesheet" type="text/css" href="css/welcome.css">

	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Paytone+One" rel="stylesheet">
</head>

<body>

  <!--NavBar-->
        <nav class="nav">
			   <div class="nav-logo">
				   <p>ADBMS</p>
			   </div>
			   
			   <div class="nav-menu" id="navMenu">
				   <ul>
					   <li><a href="index.php" class="link ">Home</a></li>
					   <li><a href="Booking.php" class="link">Booking</a></li>
					   <li><a href="About.php" class="link active">About</a></li>
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
      <!--SingUp Modal content-->
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
      <!--Login Modal content End-->
    </div>
  </div>
  <!--Login Modal End-->


  <h1>About</h1>
  <div class="container" id="cell">
  	<p>Welcome to our About Us page, where we take pride in sharing our journey, values, and accomplishments with you.</p>
  	<p>Our airline has a rich history that spans 50 years, showcasing our commitment to excellence and passion for aviation. From humble beginnings to becoming a prominent player in the industry. 
Our leadership team comprises seasoned professionals dedicated to steering our airline towards greater heights while ensuring the highest standards of safety, service, and sustainability.</p>
  <br>
  <p>Over the years, we have achieved significant milestones and garnered numerous accolades, reflecting our dedication to innovation, customer satisfaction, and community engagement. We are honored to have received recognition such as [list achievements]. </p>
  <br>
  <p>What truly drives us is the feedback and support from our customers and partners. Their testimonials speak volumes about our commitment to delivering exceptional experiences and building lasting relationships.
</p>
  <br>
  <p>Thank you for choosing us and being part of our journey. We look forward to serving you with excellence and integrity for many years to come.<br>
  Support for the India Make, in India vision.</p>
  <br>
  <p>Greener together<br>
  Commitment to minimise our environmental impact.</p>
  <br>
  <p>Working together<br>
  The development and well-being of our diverse employees.</p>
  <br>
  <p>Giving together<br>
  Contributions to charities and humanitarian relief.</p>
  <br>
  <p>Our Responsibility<br>
  More details about the ‘Together’ framework and initiatives are available in regular reports, published since 2024.</p>
  <p><br>ADBMS PROJECT BY:<br><br>
    Akshat Negi<br>
    Ameya Taneja<br>
    Shreyanshi Dobhal<br>
    Abhishek Bhaskar</p>
  </div>
</body>
</html>