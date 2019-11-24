<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername,$username,$password);
	mysqli_select_db($conn,"ravi");
	$username = $_POST['user'];
	
    $password = $_POST['pass'];
    $password2 = $_POST['pass2'];
$s = "SELECT * FROM ravi  ";
$result = mysqli_query($conn,$s);
  
if ($result == 1)
     {
	echo "Already login" ;
	}
	else{
		$login = "INSERT INTO registration(username , password , password2) VALUES ('$username','$password','$password2') ";
		mysqli_query($conn, $login);
		echo "<pre><h1>                                    Registration Successful</h1>";
	}
?>
