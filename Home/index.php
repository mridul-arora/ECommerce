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
        border-color:brown;
        border-width: 20;
        background-color:burlywood;
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

    <?php
    if(isset($_SESSION['phn']))
    { /*echo ' <div class="container">
        <Center>
            <form action="blog.php" method="post">
                <div class="row">
                    <input class="title" type="text" placeholder="Write Title here" name="title" />
                </div>
                <div class="row">
                  <textarea id="para" class="para" placeholder="Pour your feelings here" name="para"></textarea>
                </div>
                <div class="row">
                    <button type="submit" name="post" value="Post" class="btn btn-submit post">Post</button>
                    <button type="reset" name="post" value="Reset" class="btn btn-sbmit post">Reset</button>
                </div>
            </form>
        </Center>
    </div>
'*/
        ;}
    /*if not already logged in*/
    //if(!isset($_SESSION['uname']))
    else
    { /*echo '
    <div class="container">
        <Center>
            <form action="blog.php" method="post">
                <div class="row">
                    <input class="title" type="text" placeholder="abe login kar pehle" name="fname" />
                    <input class="reg" type="email" placeholder="Email" name="email" />
                </div>
                <div class="row">
                    <input class="reg" type="text" placeholder="Username" name="uname" />
                    <input class="reg" type="password" placeholder="Password" name="pwd" />
                </div>
                <div class="row">
                    <input class="reg" type="text" placeholder="Course" name="course" />
                    <input class="reg" type="text" placeholder="Year" name="year" />
                </div>
                <div class="row">
                    <button type="sub" name="sub" value="Submit" class="btn btn-submit post">Post</button>
                </div>
            </form>
        </Center>
    </div>
   '*/
        ;}?>


</body>

</html>
