<?php
require 'config.php';
if(isset($_POST["submit"])){
    session_start();
    $tname = $_POST["tnm"];
    $tage = $_POST["tage"];
    $tadd = $_POST["tadd"];
    $tpn = $_POST["tpn"];
    $temail = $_POST["temail"];
    $_query = "INSERT INTO teacher VALUES('','$tname','$tage','$tadd','$tpn','$temail')";
    $res = mysqli_query($conn,$_query);
    if($res){
    echo
   "<script> alert('Teacher added'); </script>";
   header('location: teacher.php');
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
                <h2 style="color: rgb(25, 16, 128);"><b><u><i>ADD TEACHER</i></u></b></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form class="form-horizontal" action="" method="post">
                    <!--Teacher Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtfnm"
                            style="font-size: 15px; font-style: italic;">Teacher Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tnm" placeholder="Teacher Name" required>
                        </div>
                    </div>                                
                    <!--Age-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="age"
                            style="font-size: 15px; font-style: italic;">Teacher age:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"  name="tage" placeholder="Age" required>
                        </div>
                    </div>
                    <!--Address-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Add"
                            style="font-size: 15px; font-style: italic;">Address:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="tadd" placeholder="Address" required></textarea>
                        </div>
                    </div>
                    <!--Phone number-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phn"
                            style="font-size: 15px; font-style: italic;">Phone No:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="phn" name="tpn" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <!--Email Id-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email"
                            style="font-size: 15px; font-style: italic;">Email Id:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="temail" placeholder="Email" required>
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