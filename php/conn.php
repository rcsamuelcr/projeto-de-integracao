<?php

   //Declarações de Variavéis
    $servername ="127.0.0.1";
    $username   ="root";
    $password   ="";
    $database   = "cadastro";
   

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die ("Falha na conexão: ".mysqli_connect_error());
    }
    
?>