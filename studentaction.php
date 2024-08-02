<?php
	$name=$_POST['cname'];
	$prn=$_POST['uname'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$pass=$_POST['pass'];
	$conn = mysqli_connect("localhost","root","","registration");

	
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO `user`(`name`, `prn`, `email`, `mob`, `password`) VALUES ('$name','$prn','$email',$mob,'$pass')";
	
	if (mysqli_query($conn, $sql)) {
			?>
			<script>
				window.location.assign("StudentLogin.php");
			</script>
			<?php
			} 
	else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
?>

<html>
<body>
<br><br>
<a href="StudentLogin.php"><input type="button" value="Login" name="login"></a>
</body>
</html>
