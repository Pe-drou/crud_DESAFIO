<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="site_bala";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        echo "Erro na conexão" . $conn->connect_error;
    } else {
        echo "Conexão bem-sucedida";
    }
    // para a tabela:
    // nome: trabalhadores
    // colunas: ID, nome, identificador, area
?>