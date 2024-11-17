<?php
    $bd_host = 'localhost';
    $bd_user_name = 'root';
    $bd_user_password = '';
    $bd_name = 'store';

    $conn = new mysqli($bd_host, $bd_user_name, $bd_user_password, $bd_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   

?>