<?php
        $server = "localhost";
        $user = "root";
        $pass =  "";
        $database = "webphp";

        //create connect
        $conn = mysqli_connect($server,$user,$pass, $database);
                mysqli_query($conn,'set names"utf8"');

        //check connect
        if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }

    