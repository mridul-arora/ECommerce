<?php include "assets/parts/includes.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Main Page
    </title>
</head>
<style>
    .title {
        width: 70em;
        /*width: 20em;*/
        padding: 4px 4px;
        border-radius: 5px;
        margin: 0em 3em;
        border-color: brown;
        border-width: 20;
        background-color: burlywood;
    }

    .para {
        resize: none;
        overflow: scroll;
        /*  font-size: 1.5vh;
        padding: 1vh 0.5vw;*/
        border: none;
        width: 70em;
        /* width: 20em;*/
        padding: 4px 4px;
        margin-bottom: 2vh;
        border-radius: 5px;
        margin: 0em 3em;
    }

    .post {
        width: 20em;
    }

    .container {
        margin-top: 20vh;
    }

</style>

<body>
    <!--Navigation Bar-->
    <nav class='navbar navbar-inverse navar-fixed-top'>
        <div class='container-fluid'>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <a class="navbar-brand" href="../Ecommerce/">WebSiteName</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class='nav navbar-nav navbar-right'>
                    <!--If you are already logged in-->
                    <?php session_start();
    if(isset($_SESSION['phn']))
    {echo "<li><a href='logout/'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";}
    /* if not already logged in */
    if(!isset($_SESSION['phn'])) {echo "
    <li><a href='register/'><span class='glyphicon glyphicon-user'></span> Register</a></li>
    <li><a href='login/'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";}?>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>
