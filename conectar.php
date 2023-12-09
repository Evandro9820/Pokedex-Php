<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "pokemon";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
