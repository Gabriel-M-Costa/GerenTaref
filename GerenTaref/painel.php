<?php
include("protect.php");
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Painel</title>
</head>

<body>
  <h3>Bem vindo ao Painel,
    <?php echo $_SESSION['nome']; ?>
  </h3>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <ul class="navbar-nav">
              <ul class="navbar-nav">
                <li class="nav-link active"><a class="nav-link" href="?page=novo">Nova tarefa</a>
                  <ul class="navbar-nav">
                    <li class="nav-link active"><a class="nav-link" href="?page=listar">Lista de tarefas</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
          include("conexao.php");
          switch (@$_REQUEST["page"]) {
            case "novo":
              include("nova-tarefa.php");
              break;
            case "listar":
              include("listar-tarefas.php");
              break;
            case "salvar":
              include("salvar-tarefas.php");
              break;
            case "editar":
              include("editar-tarefas.php");
              break;
            case "index";
              include("index.php");
              break;
            default:
              print "";
          }
          ?>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <p><a href="logout.php">Sair </a></p>

  </body>

</html>