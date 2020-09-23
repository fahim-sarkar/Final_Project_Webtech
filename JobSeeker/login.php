<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>

<div class="topnav">
 <div class="topnav-rright"> <img src="logo.png" height="40" width="120"/> </div>
  <a class="active" href="login.php">Home</a>
  <a href="jobseeker.php">Our Job Seekers </a>
  <a href="contact_us.php">Contact Us</a>
  <a href="about_us.php">About Us</a>
  
 
</div>
   <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        <form action="login.php" method="post" class="sign-in-form">
        	<?php include('errors.php'); ?>

            <h2 class="title">Sign in</h2>
            <div class="input-field">
            	  
              <i class="fas fa-user"></i>
              <input type="text" name="username" class="form-control" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" class="form-control" placeholder="Password" />
            </div>
            <input type="submit" name="login_user" value="Login" class="btn solid" />
            
          </form>
         
            <form method="post" action="login.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
            	
              <i class="fas fa-user"></i>
              <?php include('errors.php'); ?>
               <input type="text" name="username" class="form-control" placeholder="Username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
          
              
                <input type="email" name="email" placeholder="Email" class="form-control" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              
               <input type="password" name="password_1" class="form-control" placeholder="Password" required/>
            </div>
           
 <div class="input-field">
              <i class="fas fa-lock"></i>
              
               <input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required/>
            </div>

 <button type="submit" class="btn" name="reg_user" value="Submit">Sign Up</button>
  
</form>  <center>
            <p class="social-text">Or Sign up with social platforms</p> </center>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
