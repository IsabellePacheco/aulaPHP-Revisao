<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['nomes'];

    $sql = "SELECT * FROM teste WHERE nome='$nome' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['nomes'] = $nome;
        header('location: index.php');
    } else {
        $error = "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body style="width: 100vw; height: 100vh;">
    <div class="container" style="width: 500px; height: 300px;">
        <form method="post" action="">
            <h2>Login</h2>
            <label for="nome"><p>Usuário:</p></label>
            <input type="text" name="usuario" required>
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>