<?php 
$cname=$pass=$cnumber=$email='';
$cname = $_POST['cname'];
$pass = $_POST['pass'];
$cnumber = $_POST['number'];
$email = $_POST['email'];
   ?>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	// $db="registration";
session_start();
if(isset($_POST['Submit']))
{
		if(isset($_POST['pass']) &&  isset($_POST['email']))
		{
	$conn = mysqli_connect("localhost","root","","registration");
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}
	$sql = "INSERT INTO `admin`(`email`, `password`) VALUES ('$email','$pass')";
	
	if (mysqli_query($conn, $sql)) {
			?>
			<script>
				window.location.assign("FacultyLogin.php");
			</script>
			<?php
			} 
	else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	else echo "Values not set!!!!!!";
}
else echo "submit not set !!!";
?>


<html>
<body>
<br><br>
<a href="facultylogin.php"><input type="button" value="Login" name="login"></a>
</body>
</html>
