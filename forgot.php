<?php
  require 'config.php';
  if(isset($_POST["submit"])){
    session_start();
    $pwd = $_POST["pwd"];
    $phn = $_POST["phone"];
    $result = mysqli_query($conn, "SELECT * FROM stud WHERE phone = '$phn' OR email = '$phn'");     
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)>0)
    {
        $_query = "UPDATE stud set password = '$pwd' where phone = '$phn' or email = '$phn'  ";
        mysqli_query($conn,$_query);
        echo'<script> alert("Password updated"); 
        window.location.href="login.php";</script>'; 

     }
     else{
         echo
         "<script> alert('user not registered'); </script>";
     }
    }
    
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>iEducate - Transforming online education</title>
    <style>
        .container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          background-color: lightgray;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          margin-top: 150px;
        }
    
        h2 {
          text-align: center;
          margin-bottom: 20px;
        }
    
        .form-group {
          margin-bottom: 20px;
        }
    
        label {
          display: block;
          font-weight: bold;
          margin-bottom: 5px;
        }
    
        input[type="text"],
        input[type="password"] {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 10px;
        }
    
        input[type="submit"] {
          width: 100%;
          padding: 10px;
          background-color: #4caf50;
          color: #fff;
          border: none;
          border-radius: 10px;
          cursor: pointer;
        }
    
        input[type="submit"]:hover {
          background-color: #45a049;
        }
       
      </style>
    
</head>

<body style="background-color: beige; background: url('images/download.jpeg'); background-repeat: no-repeat; background-size: cover;" > 
    <nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="images/edu.jpg" alt="logo"></div>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <div class="rightnav">
            <input type="text" name="search" id="search" style="width: 30%">
            <button class="btn btn-sm">Search</button>
        </div>
    </nav>
    <div class="container">
        <h2>Change password</h2>
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="phone" placeholder="Enter your email or phone number" required>
          </div>
          <div class="form-group">
            <label for="password">New Password:</label>
            <input type="password" id="password" name="pwd" placeholder="Enter your new password" required>
          </div>
          <input type="submit" value="change password" name="submit"><br><br>
          <div>
          <a href="login.php">Login!</a>
          <a href="register.php" style="margin-left: 250px;">New user!</a>
          </div>
          
        </form>
      </div>
      
</body>

</html>