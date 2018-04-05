<?php
session_start();
if(isset($_SESSION['phn']))
    unset($_SESSION['pwd']);
    unset($_SESSION['phn']);
session_destroy();
 header("Location:../index.php ");
?>
