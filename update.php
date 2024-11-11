<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM trabalhadores WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $trabalhador = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; // Recebe o novo nome
    $identificador = $_POST['identificador']; // Recebe o novo identificador
    $area = $_POST['area']; // Recebe a nova area
    $sql = "UPDATE trabalhadores SET nome='$nome', identificador='$identificador', area='$area' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Alterar informação de trabalhador</title>
</head>
<body>
    <div class="container">
        <h1>Atualizar trabalhador</h1>
        <form action="" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" value="<?php echo $trabalhador['nome']; ?>" required>
            <label>Identificador:</label>
            <input type="number" name="identificador" value="<?php echo $trabalhador['identificador']; ?>" required>
            <input type="text" name="area" value="<?php echo $trabalhador['area']; ?>" required>
            <input type="submit" value="Atualizar">
        </form>
        <a href="index.php">Cancelar</a> <!-- Link para voltar -->
    </div>
</body>
</html>
