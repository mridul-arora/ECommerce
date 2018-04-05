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
                    <input class="reg" type="text" placeholder="Full Name" name="fname" />
                </div>
                 <div class="row">
                    <input class="reg" type="number" placeholder="Phone no." name="phn" />
                </div>
                <div class="row">
                 <input class="reg" type="email" placeholder="Email" name="email" />
                </div>
                <div class="row">
                    <input class="reg" type="password" placeholder="Password" name="pwd" />
                </div>
                <div class="row">
                    <button type="sub" name="sub" value="Submit" class="btn btn-submit reg2">Submit</button>
                </div>
            </form>
        </Center>
    </div>

</body>

</html>
