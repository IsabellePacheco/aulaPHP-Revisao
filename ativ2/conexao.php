<?php
 
     $servername = "localhost:3306";
     $username ="root";
     $password ="Senai@118";
    //  nome do banco de dados
     $dbname ="teste";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 
 if ($conn -> connect_error){
 
     echo "Erro conexão" . $conn -> connect_error;
 
 }

?>