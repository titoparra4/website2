<?php
    $conn = new mysqli('localhost', 'root', 'root', 'tito');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>