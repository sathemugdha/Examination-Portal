<html>
    <head>
        <title> Student Login </title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <style>

		ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
  body{
           margin-top: 2%;
          /* background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(e1.jpg);*/
            background-attachment: fixed;
            background-size:cover;
            color: aliceblue;
        }

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: whitesmoke;
    text-decoration: none;
    color: black;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

         body
        {
           background-image: linear-gradient(to right, #999999,#bfbfbf);
            margin-top: 0px;
        }
        .register-left
        {
            margin-top: 20%;
            text-align: center;
            color: #fff;
            padding: 30px;
        }
       
        .register-right
        {
            margin-top: 5%;
            border: none;
            background: white;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            padding: 50px;
        }
        .register-right h2
        {
            text-align: center;
            margin-bottom: 10px;
            color: #555;
        }
        .register-form
        {
            padding: 30px;
        }
       
          .icon{
        margin-top:-10%;
        position: absolute;
        top: 100%;
        left: 40%;
        clear:both; 
    } 
    .icon a{
        display: inline-flex;
        width: 40px;
        height: 40px;
        color: white;
        background: #2c3e50;
        margin: 0 6px;
        border-radius: 50%;
        justify-content: center;
        align-items: center;
        font-size: 24px;
    }
    .icon a:hover{
        background: #007acc;
    }
            
    </style>
    </head>
    <body>
	
<!--span class="prfil-img"><img src="home.jpeg" alt=""> </span--> 
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <form action="facultylogout.php" method = "post">
                           <?php
	session_start();
	
	if(!isset($_SESSION['username']))
	{
		header('Location:./FacultySignup.php');
	}

	echo "Welcome ".$_SESSION['username']."."." This is first page.";
	echo "<br>";
	echo "<br>";

	/*$conn = mysqli_connect("localhost","root","","formdata");
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
			}

	$sql="SELECT * FROM formdb WHERE username = '$_SESSION[username]' && password = '$_SESSION[password]' ";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
    
// output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		echo "Username: " . $row["username"]. "<br><br>" ." Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
	}
	else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);*/
	?>
  <br>
	<center> <div><a href="facultylogout.php"><input type="button" value="Logout"></a></div></center>


                                <br>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="icon">

         
</div>
            </div>
        </form>
    </body>
</html>

