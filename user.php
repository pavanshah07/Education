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
    <title>iEducate - Transforming online education</title>
</head>

<body>
<nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="images/edu.jpg" alt="logo"></div>
            <li><a href="" class="active">Videos</a></li>            
        </ul>
        <div class="rightnav">        
            <button class="btn btn-sm" style="border: 5px solid red"><b><a href="logout.php">Logout</a></b></button>
        </div>
    </nav>
    <div class="container my-5">
        
<table class="table" style="border:2px solid">
  <thead>
    <tr>
      <th scope="col">Subject Name</th>
      <th scope="col">Subject topic</th>
      <th scope="col"><div class="col-sm-6"></div>Video</th>
    </tr>
  </thead>
 <tbody>
    <?php
        $sql = "select * from video";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['ID'];
                $vidnm = $row['vidnm'];
                $topic = $row['vidtopic'];
                $video = $row['vid'];
                echo ' <tr>
                <th scope="row">'.$vidnm.'</th>                
                <td>'.$topic.'</td>
                <td><div class="col-sm-4"></div><video width="320" height="150" controls style="padding-left:7px">
                <source src="videos/'.$video.'.mp4" type="video/mp4">            
                <source src="movie.ogg" type="video/ogg">            
                Your browser does not support the video tag.
            </video></td>
                </tr>';
            }
        }

    ?>
   
  </tbody>
</table>
        
</div>  

   
    
</body>

</html>