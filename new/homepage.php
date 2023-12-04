<?php
session_start();
  ?>

<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="main.css" rel="stylesheet"/>
        <script src="jquery-1.10.2.min.js"></script>
        <script src="homepage.js"></script>
    </head>
    <body>

      <!--div id="heading">
        Online Exam Portal
      </div-->
      <div style="background-color: black;text-align: center;align-content:center;color: white;padding: 9px;height: 25px;">Online Examination Portal
        
        </div>
        <div id="box">
            <div id="main"></div>
            
            <div id="loginform">
                <h1>LOGIN AS</h1>
                <form action="StudentLogin.php" method="post">
                <input type="submit" value="STUDENT">
                  </form>
                <form action="FacultyLogin.php" method="post">

                <input type="submit" value="FACULTY">
                </form>

            </div>
            
            <div id="signupform">
                <h1>SIGN UP AS</h1>
                <form action="StudentSignup.php" method="post">
                    <input type="submit" value="STUDENT"><br>
                </form>   
                <form action="FacultySignup.php" method="post">
                <input type="submit" value="FACULTY">
                </form>
            </div>
            
            <div id="login_msg">Already have an account?</div>
            <div id="signup_msg">Don't have an account?</div>
            
            <button id="login_btn">LOGIN</button>
            <button id="signup_btn">SIGN UP</button>
            
            
        </div>
    </body>
</html>