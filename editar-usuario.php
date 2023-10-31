<h1>Editar tarefa</h1>
<?php
$sql = "SELECT * FROM usuario WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php print $row->id; ?>">
  <div class="mb-2">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
  </div>
  <div class="mb-2">
    <label>tarefa</label>
    <input type="text" name="tarefa" value="<?php print $row->usuario; ?>" class="form-control">
  </div>
  <div class="mb-2">
    <label>tempo</label>
    <input type="text" name="tempo" class="form-control" required>
  </div>
  <div class="mb-2">
    <label>Criador</label>
    <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>