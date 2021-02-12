<?php
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!='SIM'){
    header('Location: index.php');
  }
?>
<html>
  <head>
    <title>RASE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>

  <body class="bg-dark">

    <div class="container table-responsive">

      <form class="form-group mt-1" method="post" id="form-pesquisa" action="">
        <div class="form-group">
          <input class="form-control" type="text" id="pesquisa" name="pesquisa" placeholder="Pesquise o nome" autofocus>
        </div>
      </form>

      <div class="resultado">
        

      </div>

    </div>
    <div id="demo1" class="fixed-bottom text-white">
      <? foreach ($_SESSION['carrinho'] as $key => $value) {
        # code...
      } 
      echo "$value"; ?>
    </div>

    <!-- SCRIPT--> 
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/personalizado.js"></script>
  </body>
</html>