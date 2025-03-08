<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "spiritx_usersign";

    $conn = new mysqli($servername, $username, $password,$db);

    if ($conn) {
        //echo "Connected successfully";
    }
    else{
        die(mysqli_error($conn));
    }

    
?>