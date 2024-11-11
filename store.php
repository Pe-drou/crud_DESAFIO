<?php
include 'conexao.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $nome = $_POST['nome']; // Recebe o nome
    $identificador = $_POST['identificador']; // Recebe o identificador
    $area = $_POST['area']; // Recebe a área
    $sql = "INSERT INTO trabalhadores (nome, identificador, area) VALUES ('$nome', '$identificador', '$area')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>