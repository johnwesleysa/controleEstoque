<?php
$servername = "localhost"; //nome do host do banco de dados
$username = "root"; //nome do usuário, no caso root
$password = ""; //senha de usuário, no caso em branco que é o padrão do xampp
$nameDb = "estoque_db"; //nome do banco de dados

// Estabelecer conexão com o BD
$conexao = new mysqli($servername, $username, $password, $nameDb);


// Verifica conexão com o banco de dados
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
