<?php

$con = new mysqli('localhost', 'root', '');
// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform a query, check for error
//mysqli_query($con, "CREATE DATABASE IF NOT EXISTS TESTDB"); OR
mysqli_query($con, "CREATE DATABASE TESTDB") or die('Oh shit!It already exists!');
echo 'hi';
mysqli_close($con);
