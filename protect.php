<?php

  if(!isset($_SESSION)) {
    session_start();
  }


  if(!isset($_SESSION["username"])) {
    die('Voce precisar logar para acessar a página.<a href="telalogin.php">Entrar');
  }
?>