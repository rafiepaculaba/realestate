<?php

function db_connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "realestate";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    } else {
        return $con;
    }
    

}
