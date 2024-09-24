<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "saras";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login functionality
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        header("location:index.html");
        // You can redirect to another page after successful login
    } else {
      echo "<script>alert('Login failed. Check your username and password.')</script>";
       
    }
}

// Registration functionality
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $collegeDomain = 'cutm.ac.in';
    if (substr($email, -strlen($collegeDomain)) !== $collegeDomain) {
        die("<script>alert('Error: Only college email addresses are allowed.')</script>");
    }

  // Password Validation
  $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);


    if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        // Password does not meet criteria
        echo "<script>alert('Password must contain at least one uppercase letter, one lowercase letter, one digit, and be at least 8 characters long.')</script>";
        exit();
    }


  // Password and confirm password match check
  if ($password !== $confirmpassword) {
      echo "<script>alert('Passwords do not match')</script>";
      exit();
  }
    // You may want to add more validation and security measures before inserting data into the database

    $insertQuery = "INSERT INTO register (username, email , number , password , confirmpassword)
    VALUES ('$username', '$email', '$number', '$password' , '$confirmpassword' )";
    
    if ($conn->query($insertQuery) === TRUE) {
      header("location:index.html");
        // You can redirect to another page after successful registration
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="style(1).css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous">
  </script>
  
  
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-in-form" method="post">
            <h2 class="title">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
            <i class="fas fa-eye"></i>
              <input name="password" type="password" placeholder="Password" />
            
            </div>
            
            <input type="submit" value="Login" class="btn solid" name="login" />

            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/suiit.official/" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fsuiit_official" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://suiit.ac.in/" target="_blank" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/school/sambalpur-university-institute-of-information-technology/?originalSubdomain=in" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-up-form" method="post">
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
             <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="number" type="tel" placeholder="Phone Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-eye"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-eye"></i>
              <input name="confirmpassword" type="password" placeholder="Confirm Password" />
            </div>
            <input type="submit" value="register" class="btn solid" name="register"/>

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/suiit.official/" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fsuiit_official" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://suiit.ac.in/" target="_blank" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/school/sambalpur-university-institute-of-information-technology/?originalSubdomain=in" target="_blank" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Unlock your career potential by signing in </p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="./img/log.svg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Unlock your career potential by loging in </p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="./img/register.svg" class="image" alt="">
        </div>
      </div>
    </div>


    <script src="./app.js"></script>
  </body>
</html>
