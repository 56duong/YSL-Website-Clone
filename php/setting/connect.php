<?php
    require_once __DIR__."/config.php";

    //connect
    $sqlservername = SQLSERVERNAME;
    $sqlusername = SQLUSERNAME;
    $sqlpassword = SQLPASSWORD;
    $sqldatabase = SQLDATABASE;

    //creat connection
    $conn = mysqli_connect($sqlservername, $sqlusername, $sqlpassword, $sqldatabase);

    //check connection
    if(!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }
?>
