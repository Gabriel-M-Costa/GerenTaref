<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {

    $email = $conn->real_escape_string($_POST['email']);
    $senha = $conn->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: painel.php");

    } else {
      echo "Falha ao logar! E-mail ou senha incorretos";
    }

  }

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Login</title>
</head>

<body>
  <h1>Acesse sua conta</h1>
  <form action="" method="POST">
    <p>
      <label>E-mail</label>
      <input type="text" name="email">
    </p>
    <p>
      <label>Senha</label>
      <input type="password" name="senha">
    </p>
    <p>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </p>
    <p>Não tem conta? Crie uma <button type="submit" class="btn btn-primary"><a class="nav-link"
          href="novo-usuario.php">Aqui</a></button> </p>
  </form>
</body>

</html>