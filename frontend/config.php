<?php
$host="localhost";
$user="root";
$conn = mysqli_connect('localhost', 'root', '123456', 'phpdb') or die("Connection failed: " . mysqli_connect_error());
    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
 ?>