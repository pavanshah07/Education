<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from teacher where id =$id";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        header('location: teacher.php');
    }
    else{
        echo "error";
    }
}
?>