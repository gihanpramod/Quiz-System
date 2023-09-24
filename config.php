<?php
    $conx = mysqli_connect("localhost","root","","project");
    if(!$conx){
        echo 'Connection Failed';
    }
