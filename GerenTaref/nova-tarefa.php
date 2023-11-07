<h1>Nova tarefa</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div class="mb-2">
    <label>Quem efetuará</label>
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="mb-2">
    <label>Tarefa</label>
    <input type="text" name="usuario" class="form-control">
  </div>
  <div class="mb-2">
    <label>Tempo de execução</label>
    <input type="text" name="senha" class="form-control">
  </div>
  <div class="mb-2">
    <label>Criador</label>
    <input type="text" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>