<?php

    // database info
    $servername = "mysql796.umbler.com:41890";
    $username = "drawandcode";
    $password = "BGr9mRaV7?ZGcK+";
    $dbname = "drawandcode";
    
    // Create connection
    $conn = new mysqli($servername, 
        $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " 
            . $conn->connect_error);
    }

    if( isset( $_POST['email'] ) ) {
        $rank       = $_POST['rank'];
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $userid     = $_POST['userid'];

        $insert = " UPDATE users SET name = '$name', email = '$email', rank = '$rank' WHERE id = " .$userid ;
        print_r($insert);

        if(mysqli_query($conn, $insert)){
            echo "ok"; 
        }

        mysqli_query($conn, $insert); 
    }

    // Close connection
    mysqli_close($conn);
?>