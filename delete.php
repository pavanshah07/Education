<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from stud where id =$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location: adminback.php');
    }
    else{
        echo "error";
    }
}
?>