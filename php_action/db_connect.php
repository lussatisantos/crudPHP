<?php 
    //Conexao com banco de dados

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()) {
        echo "Erro na conexao" . mysqli_connect_error();
    } 
?>