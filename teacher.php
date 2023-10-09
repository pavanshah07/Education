<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script language="javascript" type="text/javascript">
      window.history.forward();  
    </script>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>iEducate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="images/edu.jpg" alt="logo"></div>
            <li><a href="adminback.php" class="active" style=" font-size:15px">Student</a></li>    
            <li><a href="teacher.php"  style="color:green; font-size:15px">Teacher</a></li>        
            <li><a href="video.php"  style=" font-size:15px">Video</a></li> 
        </ul>
        <div class="rightnav">        
            <button class="btn btn-sm" style="border: 3px solid red; font-size:20px"><b><a href="logout.php">Logout</a></b></button>
        </div>
        </nav>

<div class="container my-5">
<button class="btn btn-success" ><a href="addteacher.php"style="color:white">ADD</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Teacher's Name</th>
      <th scope="col">Teacher's Age</th>
      <th scope="col">Teacher's Address</th>
      <th scope="col">Phone NO.</th>
      <th scope="col">Email</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
 <tbody>
    <?php
        $sql = "select * from teacher";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $fname = $row['tname'];
                $age = $row['tage'];
                $Address = $row['tadd'];
                $Phone = $row['tpn'];
                $email = $row['temail'];
                echo ' <tr>
                <th scope="row">'.$id.'</th>                
                <td>'.$fname.'</td>
                <td>'.$age.'</td>
                <td>'.$Address.'</td>
                <td>'.$Phone.'</td>
                <td>'.$email.'</td>
                <td>
                <button class="btn btn-danger" type="GET"><a href="delete2.php?deleteid='.$id.' " class="text-light">Delete</a></button>
                </td>
                </tr>';
            }
        }

    ?>
   
  </tbody>
</table>
        
</div>
</body>
</html>