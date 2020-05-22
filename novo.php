<?php
	include "menu.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TRANSRASE</title>
  </head>

  <body class="bg-dark">
  	        <?php 
          if(isset($_GET['produto']) && $_GET['produto'] == 'criado'){
        ?>
        <div class="bg-success row justify-content-center">
        <h5 class="text-white">Produto criado com sucesso</h5>
    	</div>
        <? } ?>
  <form class="form-group" method ="post" action="controller.php?acao=cadastrar">
  	<div class="col-md-4 form-group">
  		<h3 class="text-white">Nome:</h3>
        <input type="text" name="cnome" id="inputEmail" class="col form-control" placeholder="Digite o nome" required autofocus>
    </div>
    <div class="col-md-2 form-group">
    	<h3 class="text-white">Valor:</h3>
       	<input type="text" name="cvalor" class="form-control" placeholder="digite o valor" onkeypress="$(this).mask('R$ 9999.000')">
    </div>
    <div class="col-md-2 form-group">
    	<h3 class="text-white">Valor de venda:</h3>
        <input type="text" name="cvenda" id="inputPassword" class="form-control" placeholder="digite o valor" onkeypress="$(this).mask('R$ 9999.000')" required>
    </div>
    <div class="col-md-2 form-group">
    	<h3 class="text-white">Quantidade:</h3>
        <input type="text" name="cquantidade" id="inputPassword" class="form-control" placeholder="digite a quantidade" onkeypress="$(this).mask('9999')" required>
    </div>
    <div class="form-group row justify-content-center">
        <button class="col-md-4 btn btn-lg btn-outline-light" type="submit">CADASTRAR</button>
    </div>
   </form>
  </body>
    <script src="js/jquery.mask.min.js"></script>
</html>