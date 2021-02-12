<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RASE</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
  </head>



  <body class="text-center">


      <form class="border form-signin" method ="post" action="controller.php?acao=logar">
        <h2 class="h3 mb-3 font-weight-normal  card-header  bg-dark">RASE</h2>
        <label for="inputEmail" class="sr-only">Login</label>
        <input type="text" name="clogin" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="csenha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <?php 
          if(isset($_GET['login']) && $_GET['login'] == 'erro'){
        ?>
        <h5 class="mb-3 text-danger">Login ou senha inválido</h5>

        <? } ?>
        <button class="btn btn-lg btn-dark btn-block" type="submit">Entrar</button>
      </form>

</body>
</html>