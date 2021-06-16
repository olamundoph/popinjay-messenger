<?php
$connect=mysqli_connect ("localhost","root","","pm_users");

if(mysqli_connect_errno()){
    echo "Failed to connect: ". mysqli_connect_error();
    die();
}
?>