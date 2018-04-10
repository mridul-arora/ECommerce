<?php include "../assets/parts/includes.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
       Login
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
        width: 20.25em;
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
                     header("Location:../"); }?>
                    <!--if not already logged in -->
                    <?php if(!isset($_SESSION['phn'])) echo "
    <li><a href='../register/'><span class='glyphicon glyphicon-user'></span> Register</a></li>
    <li><a href='index.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
   "?>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container">
        <Center>
            <form action="login.php" method="post">
                <div class="row">
                    <input class="reg" type="number" placeholder="Phone no." name="phn" />
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
