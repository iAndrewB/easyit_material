<?php
    global $connectDB;
    $connectDB = new mysqli("localhost", "root", "", "easyit");
    if($connectDB->connect_error){
        die("Database unavalailable, please check it's configuration or try again later!");
    }
?>
