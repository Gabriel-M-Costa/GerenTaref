<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro</title>
</head>

<body>
  <section>
    <div class="mb-2">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3>
            <p>Cadastre sua conta</p>
          </h3>
        </div>
        <div class="box">
          <form action="cadastrar.php" method="POST">
            <div class="field">
              <div class="control">
                <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input name="email" type="email" class="input is-large" placeholder="Email" autofocus>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <input name="senha" class="input is-large" type="password" placeholder="Senha">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>,
            <div class="column is-4 is-offset-4">
              <p>Faça login informando o seu usuário e senha <button type="submit" class="btn btn-primary "><a
                    class="nav-link" href="index.php">Aqui</a></button> </p>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
</body>

</html>