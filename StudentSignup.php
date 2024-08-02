<html>
<head>
    <title>Company Form</title>
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
  text-decoration: none
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
            /*background-color: #b3b3b3;*/
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
        margin-top:10%;
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
        background-color: #007acc;
    }
    </style>
</head>
    <body>
<!--span class="prfil-img"><img src="home.jpeg" alt=""> </span--> 
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset=md-1">
                    <div class="row">
                        <div class="col-md-5 register-left">
                            <h2>STUDENT REGISTRATION</h2>
                         </div>
                        <div class="col-md-7 register-right">
                            <h2>Register Here</h2>
                             <form action="studentaction.php" method = "post">
                            <div class="register-form">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="cname" id="name" placeholder="Student Name" pattern="[A-Za-z]+" required >
                                </div>  
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="uname" id="uname" placeholder="PRN" pattern="[A-Za-z0-9]+" required >
                                </div>    
                                 <div class="form-group">
                                    <input type="password" class="form-control"  name="pass" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>    
                                 <div class="form-group">
                                    <input type="password" class="form-control"  name="cpass" id="cpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>    
                                 <div class="form-group">
                                    <input type="number" class="form-control" name="mob" id="cnumber" placeholder="Contact Number" pattern="[789][0-9]{9}" required>
                                </div>    
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required>
                                </div> 
                                <br>
                                <center><input type="submit" class="btn btn-primary" name="Submit" value="Register" onclick="passcheck(); registersuccess();"> </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="icon">

            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
</div>

        </div>
        </form>       
    </body>
</html>