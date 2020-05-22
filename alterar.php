<?php

 $linhas = 0; // Número inicial de linhas contadas
$arquivo = fopen('arquivo', 'r'); // Carrega o ponteiro
while ( !feof($arquivo) ) { // Enquanto não chegar ao final do arquivo...
    fgets($arquivo); // Perceba que o conteúdo não é colocado em nenhuma variável, pois não interessa à contagem
    $linhas++; // Aumenta a contagem de linhas
}
fclose($arquivo); // Encerra o ponteiro e libera o arquivo
	include "menu.php";
  echo "$linhas";


?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TRANSRASE</title>
  </head>

  <body class="bg-dark">

  </body>
    <div class="container table-responsive">
      <table class="table table-sm table-striped table-hover table-bordered table-dark">
        <thead class="bg-light text-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">VALOR</th>
            <th scope="col">VENDA</th>
            <th scope="col">QUANTIDADE</th>
          </tr>
        </thead>
        <tbody>
      <? foreach ($motoristas as $indice => $motorista) { ?>
          <tr>
            <th width="5%" scope="row" id="motorista_<?= $motorista->id_moto?>"><?= $motorista->id_moto?></th>
            <td width="30%"><?= $motorista->Nome_moto?></td>
            <td width="30%"><?= $motorista->CPF_moto?></td>
            <td width="30%"><?= $motorista->Numero_moto?></td>
            <td width="5%"><?= $motorista->Categoria?></td>          
          </tr>
      <? } ?>
        </tbody>
      </table>
    </div>
</html>