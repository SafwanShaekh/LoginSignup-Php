<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";

    $dbconn = new mysqli($server,$username,$password,$dbname);

    if($dbconn == false){
        echo "Failed to connect to the database " . $dbconn->connect_error;
    }
?>