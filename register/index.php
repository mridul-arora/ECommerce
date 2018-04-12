<?php include "../assets/parts/includes.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>
      Register
    </title>
</head>
<style>
    .reg {
        width: 20em;
        padding: 4px 4px;
        margin-bottom: 2vh;
        border-radius: 5px;
    }

    .reg2 {
        width: 20em;
    }

    .container {
        margin-top: 20vh;
    }

</style>

<body>
    <nav class='navbar navbar-inverse navar-fixed-top'>
        <div class='container-fluid'>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="../">WebSiteName</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class='nav navbar-nav navbar-right'>
                    <!--If you are already logged in-->
                    <?php session_start();
    if(isset($_SESSION['phn'])){ echo "
    <html><head><script type='text/javascript'>
    alert('You are already Logged in');
    </script></head>
                 <li><a href='../logout/'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
               ";
                 header("Location:../");
                                 }  ?>
                    <!--if not already logged in -->
                    <?php
                    if(!isset($_SESSION['phn'])) echo "
    <li><a href='index.php'><span class='glyphicon glyphicon-user'></span> Register</a></li>
    <li><a href='../login/'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
   "?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <Center>
            <form action="register.php" method="post">
                <div class="row">
                <!--Create Account-->
                </div>
                <div class="row">
                    <input class="reg" type="text" placeholder="Full Name" name="fname" required title="Must contain letters and white spaces only" onfocus="blurName()"/> <!--</inp>pattern="[a-zA-Z]$" title="Only letters and white space allowed" required/-->
                </div>
                 <div class="row">
                    <input class="reg" type="number" placeholder="Phone no." name="phn" pattern="[1-9]{1}(?=.*\d){9,}" title="Must contain numbers only" required/>
                </div>
                <div class="row">
                 <input class="reg" type="email" placeholder="Email" name="email" pattern="([a-z0-9._%+-])+\@(([a-z0-9.-])+\.)+([a-z]{2,4})+$" title="Must be a vaild email" required/>
                </div>
                <div class="row">
                    <input class="reg" type="password" placeholder="Password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one lower case, upper case, number and more than 7 characters" required />
                </div>
                <div class="row">
                    <button type="sub" name="sub" value="Submit" class="btn btn-submit reg2">Submit</button>
                </div>
            </form>
        </Center>
    </div>

<script>
   function blurName(){
       document.getElementsByName("fname").value {
           if (!preg_match("/^[a-zA-Z ]*$/")) {
alert("Only letters and white space allowed");
}
}
   }
    /* function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }

var fullname = document.getElementsByName("fname");
var phone = document.getElementsByName("phn");
var email = document.getElementsByName("email");
var password = document.getElementsByName("pwd");

// When the user clicks on the password field, show the message box
fullname.onfocus = function() {
    document.getElementsByName("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}*/
</script>

</body>

</html>
