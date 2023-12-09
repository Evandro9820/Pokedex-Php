<?php
// Verifica os campos de email e senha e ve se existe no banco de dados e permite o acesso ou nöo o acesso
include ("conectar.php");
$usuario = $_POST['email'];
$senha = $_POST['senha'];

$consulta = "select * from usuario where `usuario` = '$usuario' and `senha` = '$senha'";
?>