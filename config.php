<?php
// connect to database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'todo';

$conn = mysqli_connect('localhost', 'hallyprince', 'sidehustletask3', 'todo');

// check connection
if(!$conn){
    echo "Failed to connect";
}

?>