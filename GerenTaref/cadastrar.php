<?php
include("conexao.php");

$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conn, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));

$sql_code = "SELECT * FROM usuarios where usuario = '$usuario'";
$result = mysqli_query($conn, $sql_code);
$row = mysqli_fetch_assoc($result);

if ($row == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuarios (nome, usuario, senha, email)VALUES ('{$nome}','{$usuario}','{$senha}','{$email}')";



if ($conn->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conn->close();

header('Location: novo-usuario.php');
exit;
?>