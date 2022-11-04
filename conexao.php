<?php

$con = mysqli_connect("localhost", "root", "", "porto");

    if(mysqli_connect_errno()){
        
        echo "Erro ao conectar". mysqli_connect_error();
        
    }else {
        echo "OK!";
    }

