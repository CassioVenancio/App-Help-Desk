<?php
session_start();
//require_once("validar_login.php");
$criarArquivo = fopen('registro.hd', 'a');

$texto = $_SESSION['id']. '-'  .$_POST['titulo']. '-' .$_POST['categoria']. '-' .$_POST['descricao']  .'-'. $_SESSION['tipo'] ."\r\n";

fwrite($criarArquivo, $texto);

header('Location: abrir_chamado.php');