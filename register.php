<?php
require 'config.php';
if(isset($_POST["submit"])){
    session_start();
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $fatname = $_POST["fatname"];
    $motname = $_POST["motname"];
    $dobnm = $_POST["dobnm"];
    $add = $_POST["add"];
    $course = $_POST["course"];
    $phn = $_POST["phone"];
    $email = $_POST["email"];
    $state = $_POST["state"];
    $pwd = $_POST["pwd"];
    $cpwd = $_POST["cpwd"];
    $duplicate = mysqli_query($conn, "SELECT * FROM stud WHERE phone = '$phn' OR email = '$email'");
    if (mysqli_num_rows($duplicate)>0)
        {
            echo
            "<script> alert('Username or email already taken');</script> break; ";
        }
        else
        {
            if($pwd == $cpwd and strlen($phn) == 10)
            {
                $_query = "INSERT INTO stud VALUES('','$fname','$lname','$fatname','$motname','$dobnm','$add','$course','$phn','$email','$state','$pwd')";
                mysqli_query($conn,$_query);
                echo
                "<script> alert('Registration success'); </script>";
                $_SESSION = [];
session_unset();
session_destroy();
            }
            else{
                echo
                "<script> alert('Password does not match or invalid phone number.'); break; </script>";
            }
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
        <?php
        require 'head.php'; 
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 style="color: rgb(25, 16, 128);"><b><u><i>Register</i></u></b></h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form class="form-horizontal" action="" method="post">
                    <!--First Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtfnm"
                            style="font-size: 15px; font-style: italic;">First Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtfname" name="fname" placeholder="First Name" required>
                        </div>
                    </div>
                    <!--Last Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtlnm"
                            style="font-size: 15px; font-style: italic;">Last Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtlname" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <!--Father Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtfatnm"
                            style="font-size: 15px; font-style: italic;">Father Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtfatname" name="fatname" placeholder="Father's Name" required>
                        </div>
                    </div>
                    <!--Mother Name-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="txtmotnm"
                            style="font-size: 15px; font-style: italic;">MotherName:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtmotname" name="motname" placeholder="Mother's Name" required>
                        </div>
                    </div>
                    <!--Date Of Birth-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Dob"
                            style="font-size: 15px; font-style: italic;">DOB:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="DOB" name="dobnm" placeholder="Date Of Birth" required>
                        </div>
                    </div>
                    <!--Address-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="Add"
                            style="font-size: 15px; font-style: italic;">Address:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="add" placeholder="Address" required></textarea>
                        </div>
                    </div>
                    <!--Course-->
                    <div class="form-group">

                        <label class="control-label col-sm-2" for="Course"
                            style="font-size: 15px; font-style: italic;">Course:</label>
                        <div class="col-sm-10">
                            <select id="course" style="width: 100%; height: 30px;" name="course" required>
                                <option value="">--Select course--</option>
                                <option value="jeeeleven">11th JEE</option>
                                <option value="jeetwelve">12th JEE</option>
                                <option value="jeedrop">Drop JEE</option>
                                <option value="neeteleven">11th Neet</option>
                                <option value="neettwelve">12th Neet</option>
                                <option value="neetdrop">drop Neet</option>
                                <option value="mca">MCA</option>
                                <option value="mba">MBA</option>
                            </select>
                        </div>
                    </div>
                    <!--Phone number-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="phn"
                            style="font-size: 15px; font-style: italic;">Phone No:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="phn" name="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <!--Email Id-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email"
                            style="font-size: 15px; font-style: italic;">Email Id:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <!--State-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="state"
                            style="font-size: 15px; font-style: italic;">State:</label>
                        <div class="col-sm-10">
                            <select id="state" style="width: 100%; height: 30px;" name="state" required>
                                <option value="" selected>-- Select Your State --</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                    <!--Password-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd"
                            style="font-size: 15px; font-style: italic;">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pwd"  name="pwd" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <!--confirm password-->
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cpwd"
                            style="font-size: 15px; font-style: italic;">Confirm password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter password again" required> 
                        </div>
                    </div>
                    <!--Buttons-->
                    <div class="form-group">
                        <br>
                        <div class="col-sm-offset-5 col-sm-7">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" id="b" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="custom.js"></script>
    <div class="footer">
            <?php
            require 'footer.php';
            ?>
        </div>

</body>

</html>