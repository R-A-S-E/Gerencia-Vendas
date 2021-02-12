<?php
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!='SIM'){
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




    <div class="navbar dropdown d-flex bg-light mb-3 h5 justify-content-between">
    <div class="nav">
      <a class="nav-link border-right text-secondary" href="novo.php">NOVO</a>
      <a class="nav-link border-right border-left text-secondary" href="alterar.php">ALTERAR</a>
    </div>
      <a class="nav-link border-right border-left text-danger" href=""  onClick="window.open('venda.php','pagename','resizable,height=4000,width=8000')">VENDAS</a>
    <div class="nav">
      <a class="nav-link border-right border-left text-secondary" href=""><?=$_SESSION['login'] ?></a>
      <a class="nav-link border-left text-secondary" href="controller.php?acao=sair">SAIR</a>
   </div></div>
<!-- APARECER--> 

  <!-- JAVASCRIPT-->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>