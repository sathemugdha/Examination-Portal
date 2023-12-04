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

	$sql = "SELECT * FROM admin where email='$email' " ;
	$result = mysqli_query($conn, $sql);
	$rowcount = mysqli_num_rows($result);
	
	if ( $rowcount > 0)
	{
    	while($row = mysqli_fetch_assoc($result)) 
    	{
			if ( $password == $row['password'])
           	{   //$_SESSION['email']=             
				//echo $row['email'];
				$_SESSION["name"] = 'Admin';
				$_SESSION["key"] ='sunny7785068889';
				$_SESSION["email"] = $email;
				header("location:dash.php?q=0");
	       		?>
			<script>
				// window.location.assign("admin.php?q=temp1.php");
								//window.location.assign("admin.php?q=1");

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
		  header('Location:./errorpage.php');     

	}
         
	
	mysqli_close($conn);
}
?>
