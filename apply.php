<?php
include("connection.php");
?>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="nocstyle.css" />
  </head>
  <body>
    
  <div class="video">
    <video src="video1.mp4" autoplay muted loop id="myvideo"></video>
  </div>
    <section class="container">
      
      <form action="ritu.php" class="form" method="post">
        <header>NOC Form</header>
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="fullname"required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="emailaddress" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter phone number" name="phonenumber" required />
          </div>
          
</div>
          <div class="input-box">
            <label>EnrollmentID</label>
            <input type="text" placeholder="Enter EnrollmentID" name="enrollmentid" required />
            <label>Batch</label>
            <input type="text" placeholder="Enter your Batch" name="batch" required />
            <label>Branch</label>
            <input type="text" placeholder="Enter your Branch"name="branch" required />
          </div>
        </div>
        <div class="input-box">
            <input type="submit" name="submit" value="submit">
          </div>
      </form>
    </section>
  </body>
</html>
