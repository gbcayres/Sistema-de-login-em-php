<?php

  include("protect.php")

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Precifica</title>
</head>
<body>
  <h1>PAGINA PRINCIPAL</h1>
  Bem vindo a página principal <?php echo "'" . $_SESSION["username"] . "'"?>
  <p><a href="logout.php">Sair</a></p>
</body>
</html>