<?php
if(!isset($_SESSION)){
    session_start();
}
$con = mysqli_connect("localhost", "root", "", "final_ecommerce")or die($mysqli_error($con));
?>