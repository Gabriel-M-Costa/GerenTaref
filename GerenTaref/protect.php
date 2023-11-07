<?php

if (!isset($_SESSION)) {
  session_start();
}
if (!isset($_SESSION["id"])) {
  die("Você não pode acessar esta página. Faça login<p> <br><a href=\"index.php\">Login</a></p>");
}
?>