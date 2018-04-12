<?php
// create a variable
$fname=$_POST['fname'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$con=mysqli_connect('localhost','root','','ECommerce');
if(mysqli_connect_errno($con))
{
		echo 'Failed to connect';
}

//Execute the query
$first=mysqli_query($con,"INSERT INTO reg(fname,phn,email,pwd)
				VALUES('$fname','$phn','$email','$pwd')");

// code that will check the if added condition
// and display the content in the browser
	if($first)  {
        $second=mysqli_query($con,"SELECT * FROM reg WHERE phn='$phn'");
        while($row=mysqli_fetch_array($second)){
            session_start();

      //this is working great
        $_SESSION['phn'];
        echo "<html><head>
    <script type='text/javascript'>
    alert('You are Logged in');
    </script></head></html>";
        header("Location:../index.php");
}

    }

else
{  echo "
   <script type='text/javascript'>
    alert('Please enter a unique username');
    </script>";
	header("location:index.php");
}
?>
