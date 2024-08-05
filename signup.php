

<?php
$con=mysqli_connect("localhost","root","","gdcairways") or die("Error");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <!--<link rel="stylesheet" type="text/css" href="css/welcome.css">-->
      <title>Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <!-- Nav  -->
    <nav class="nav">
        <div class="nav-logo">
            <p>ADBMS</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="welcome.html" class="link active">Home</a></li>
                <li><a href="About.php" class="link">Booking</a></li>
                <li><a href="About.php" class="link">About</a></li>
                <li><a href="Contacts.php" class="link">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <header>Sign Up</header>
            </div>
            <div class="input-box">
            <form  method="POST" action="loginf.php">
                <div class="input-box">
                    <input type="text" name="username" class="input-field" placeholder="Name">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" name="emailid" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="passwordSignUp" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" name="submit" class="submit" value="Register">
                </form>
            <br>
            <span id="messagecheck1"></span>
            <br>
            <span id="messagecheck2"></span>
            </div>
           
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>

</div>   

<script type="text/javascript" src="HomeJSnew.js"></script>

<script>
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }
    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>

</body>
</html>





    


        