<?php
  if($usuario_autenticado = false){
    header('Location: index.php');
  }
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Color.css">
    <title>TRANSRASE</title>
  </head>

  <body class="bg-dark">
    <nav class="p-2 mb-3 bg-light">
    <ul class="nav justify-content-betweend h5">
      <li class="nav-item border-right border-secondary">
        <a class="nav-link text-secondary" href="novo.php">NOVO</a>
      </li>
      <li class="nav-item border-right border-secondary">
        <a class="nav-link text-secondary" href="alterar.php">ALTERAR</a>
      </li>
      <li class="nav-item ml-auto border-left border-secondary">
        <a class="nav-link text-secondary" href="cria_motorista.php">NOVO MOTORISTA</a>
      </li>
    </ul>
    </nav>
<!-- APARECER--> 

  <!-- JAVASCRIPT-->
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>