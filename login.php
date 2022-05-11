<?php
include('conecta.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
 
$usuario = mysqli_real_escape_string($conecta, $_POST['usuario']);
$senha = mysqli_real_escape_string($conecta, $_POST['senha']);
 
$query = "select usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}'";
 
$result = mysqli_query($conecta, $query);
 
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = 0;
	header('Location: index.php');
	exit();
}