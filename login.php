<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Ludiflex | Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>ADBMS</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link active">Home</a></li>
                <li><a href="Booking.php" class="link">Booking</a></li>
                <li><a href="About.php" class="link">About</a></li>
                <li><a href="Contacts.php" class="link">Contact  Us</a></li>
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
    
        <!------------------- login form -------------------------->

        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>
            
            <div class="input-box">
                <form action="regis.php" method="POST"></form>
                <input type="text" name="ul" class="input-field" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="pl" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" name="submit" class="submit" value="Sign In">
            </div>
            </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
            </form>
        </div>
        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="input-box">
            <form action="#" method="POST">
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


<?php
$con=mysqli_connect("localhost","root","","gdcairways") or die("Error");
?>

<?php

if(isset($_POST['submit']))
{


$name=$_POST['username'];
$email=$_POST['emailid'];
$password=$_POST['passwordSignUp'];
if($name=="" || $email=="" || $password=="")
{

echo "<script>alert('PLease fill all fields')</script>";



}
else{


$insert="insert into users values('".$name."','".$email."','".$password."')";
if(mysqli_query($con,$insert))
{

    echo "<script>alert('You created your account')</script>";



}
else{
    echo "<script>alert('Error')</script>";
}
}
}
?>
