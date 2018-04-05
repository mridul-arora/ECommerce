<?php
session_start();
$con=mysqli_connect('localhost','root','','ECommerce');
if(mysqli_connect_errno($con))
{
		echo 'Failed to connect';
}

if(isset($_POST['sub']))
{
$_SESSION['phn']=$phn=$_POST['phn'];
$_SESSION['pwd']=$pwd=$_POST['pwd'];

}

if(mysqli_query($con,"SELECT * FROM reg WHERE phn='$phn' AND pwd='$pwd'"))
{
   header("Location:../index.php");
}
else
{
        echo "
            <html><head><script type='text/css'>
            alert('The username and password combination does not exist.');
            window.location.href('/');
            </script></head></html>
        ";
}
?>

    <!--if(mysqli_num_rows($query1)==1)

	  $query=mysqli_query($con,"SELECT* FROM reg WHERE uname='$uname'");
     while($row=mysqli_fetch_array($query))
                    {
								$username=$row['uname'];
								$password=$row['pwd'];

									 header("Location:localhost/WebCore/index.php");
								 }

                                    else
                                    {
                                       echo "wrong entry";
                                     }

?>-->
