<?php
 
 
 include 'conexao.php';
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
     $nome = $_POST['nome']; // Recebe o nome
     $sql = "INSERT INTO nomes (nome) VALUES ('$nome')"; // Prepara a consulta
 
     // Executa a consulta e verifica se foi bem-sucedida
     if ($conn->query($sql) === TRUE) {
         header("Location: index.php"); // Redireciona para a página principal
     } else {
         echo "Erro: " . $conn->error; // Mostra erro, se houver
     }
 }
 