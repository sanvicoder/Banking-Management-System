<?php

include 'config.php';

$uid = $_GET['id'];

$sql = "delete from users where uid=$uid";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script> alert('Hurray! User deleted');
                    window.location='allusers.php';
          </script>";  
}else{
die(mysqli_error($conn));
}

header("location: allusers.php");

?>