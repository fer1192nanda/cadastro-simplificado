<?php

    $conexao = new mysqli("localhost", "root", "", "dbcaduser");
    
    if($conexao->connect_errno){
        echo ("erro ao conectar: " . mysqli_connect_error());
        exit();
    }
    else{
        echo ("conectado<br/>");
    } 

?>