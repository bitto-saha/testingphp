<?php


include"server.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <link rel="stylesheet" href="bootstrap.min.css" title="" type="" />
  <script src="bootstrap.min.js"></script>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    
    <br>
    
    
    <center><h1 class="alert-success">  Log In instead of sign up!!</h1></center>
    <br>
    <div class="form-group">
      
      <form>
        
        <label for="email"> Email Address</label>
        <input tupe="email" name="email" placeholder="Enter your email address" class="form-control" required id="email">
        
        
        <label for="pass1"> Password</label>
        <input name="pass1" type="password" placeholder="Enter your password" class="form-control" required id="pass1">
        
        <br>
        <button class="btn btn-outline-success btn-block">Log In</button>
        
      </form>
    </div>
    
    <center><p class="alert-warning">Don't have an account? <a class="btn btn-primary" href="index.php">Sign Up</a> now.</p></center>
  </div>
  <script src="main.js"></script>
</body>
</html>