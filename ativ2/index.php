
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Entrou</title>
</head>
<body style="width: 100vw; height: 100vh;">
    <div class="container">
    <h2>Bem-vindo(a) <?php echo $_SESSION['teste']; ?></h2>
    <a href="logout.php">Entrar</a>
    </div>
</body>
</html>