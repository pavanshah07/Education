<?php
require 'config.php';
if(isset($_POST["submit"])){
    session_start();
    $snm = $_POST["snm"];
    $topic = $_POST["topic"];
    $vid = $_POST["vid"];
    $_query = "INSERT INTO video VALUES('','$snm','$topic','$vid')";
    $res = mysqli_query($conn,$_query);
    if($res){
    echo
   "<script> alert('Video added'); </script>";
   header('location: video.php');
    }    
            else{
                echo
                "error";
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
</head>

<body>
    <div class="header">
    <nav class="navbar">
        <ul class="nav-list">
            <div class="logo"><img src="images/edu.jpg" alt="logo"></div>
            <li><a href="adminback.php" class="active" style="font-size:15px">Student</a></li>    
            <li><a href="teacher.php"  style=" font-size:15px">Teacher</a></li>  
            <li><a href="video.php"  style=" font-size:15px">video</a></li>        
        </ul>
        <div class="rightnav">        
            <button class="btn btn-sm" style="border: 3px solid red; font-size:20px"><b><a href="logout.php">Logout</a></b></button>
        </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 style="color: rgb(25, 16, 128);"><b><u><i>ADD Video</i></u></b></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form class="form-horizontal" action="" method="post">
                    <!--Subject Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtfnm"
                            style="font-size: 15px; font-style: italic;">Subject:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="snm" placeholder="Subject Name" required>
                        </div>
                    </div>
                    <!--Topic-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Add"
                            style="font-size: 15px; font-style: italic;">Topic:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="topic" placeholder="Topic" required></textarea>
                        </div>
                    </div>
                    <!--video-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="vid"
                            style="font-size: 15px; font-style: italic;">Phone No:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="vid" name="vid" placeholder="Video name" required>
                        </div>
                    </div>
                    
                    <!--Buttons-->
                    <div class="form-group">
                        <br>
                        <div class="col-sm-offset-5 col-sm-7">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" value="ADD" id="b" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="custom.js"></script>
    

</body>

</html>