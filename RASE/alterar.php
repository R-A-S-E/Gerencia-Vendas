<?php
  $acao = 'recuperar';
  require_once 'controller.php';  
  include "menu.php";
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

      <form class="form-group" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
          <input type="text" name="busca" placeholder="Pesquise o nome" required autofocus>
        </div>
      </form>
      <table class="table table-sm table-striped table-hover table-bordered table-dark">
        <thead class="bg-light text-secondary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">NOME</th>
            <th scope="col">VALOR(R$)</th>
            <th scope="col">VENDA(R$)</th>
            <th scope="col">QUANTIDADE</th>
          </tr>
        </thead>
        <tbody>
      <!-- PHP LISTAR --> 
      <?php while ($chama = $result->fetch_array()) { ?>

          <tr data-toggle="modal" data-target="#exampleModal" data-whateverid="<?= $chama[0]?>" data-whatevernome="<?= $chama[1]?>" data-whatevervalor="<?= $chama[2]?>" data-whatevervenda="<?= $chama[3]?>" data-whateverquantidade="<?= $chama[4]?>" >

            <th width="5%"  scope="row"><?= $chama[0]?></th>
            <td width="65%"><?= $chama[1]?></td>
            <td width="10%"><?= $chama[2]?></td>
            <td width="10%"><?= $chama[3]?></td>
            <td width="10%"><?= $chama[4]?></td>          
          </tr>
      <? } ?>
        </tbody>
      </table>
    </div>

    <!-- MODAL--> 
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="controller.php?acao=alterar">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">VALOR:</label>
                <input type="text" name="cvalor" class="form-control" onkeypress="$(this).mask('9999.00')" id="valor" required autofocus>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">VENDA:</label>
                <input type="text" name="cvenda" class="form-control" onkeypress="$(this).mask('9999.00')" id="venda" required="">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">QUANTIDADE:</label>
                <input type="text" name="cquantidade" class="form-control" onkeypress="$(this).mask('99999')" id="quanti" required="">
              </div>
              <input type="hidden" name="id" id="iid">
              <input type="hidden" name="cnome" id="nome">
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-outline-dark">Enviar</button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <!-- SCRIPT--> 
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/jquery.mask.min.js"></script>
    <script >
      $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whateverid')
      var recipientN = button.data('whatevernome')
      var recipientV = button.data('whatevervalor')
      var recipientVE = button.data('whatevervenda')
      var recipientQA = button.data('whateverquantidade') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text(recipient+' - '+recipientN)
      //modal.find('#').text(recipientN)
      modal.find('#valor').val(recipientV)
      modal.find('#venda').val(recipientVE)
      modal.find('#quanti').val(recipientQA)
      modal.find('#iid').val(recipient)
      modal.find('#nome').val(recipientN)
    })
    </script>
  </body>
</html>