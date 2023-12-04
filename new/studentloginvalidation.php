 <?php
session_start();
$email = $password="";
$email=$_POST['email'];
$password=$_POST['pass'];
$_SESSION['email']=$email;

if(isset($_POST['submit']))
{
	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "registration");


	// Check connection
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}

    
	$sql = "SELECT * FROM user where email='$email' " ;
	//echo "sql query successful";

	$result = mysqli_query($conn, $sql);
	$rowcount = mysqli_num_rows($result);
	
	//echo "hello";
	if ( $rowcount > 0)
	{
    	//echo "inside if condition";
		// output data of each row
    	while($row = mysqli_fetch_assoc($result)) 
    	{
			if ( $password == $row['password'])
           	{   $_SESSION['name']=$row['name'];
				$_SESSION['email']=$row['email'];        
	       		?>
			<script>
				window.location.assign("account.php?q=1");
			</script>
			<?php           
            }
       		else
       		{
               	echo "Incorrect password!";
            }
   		}
	}
	else
	{
		  ?>
			<script>
				window.location.assign("StudentLogin.php");
			</script>
			<?php     

	}
         
	
	mysqli_close($conn);
}
?>
