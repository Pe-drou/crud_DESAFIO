<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escravos empresariais</title>
</head>
<body>
    <header>
        <h1>Cadastro de trabalhadores</h1>
        <form action="store.php" method="POST">
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <label>Identificador:</label>
            <input type="number" name="identificador" min="0" max="32767" required>
            <label>Area:</label>
            <input type="text" name="area" required>
            <input type="submit" value="Adicionar">
        </form>
    </header>
    <hr>
    <div class="container">
        <h2>Registro de trabalhadores</h2>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>