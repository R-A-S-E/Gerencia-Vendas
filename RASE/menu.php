<?php
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado']!='SIM'){
    header('Location: index.php');
  }
?>
  <div class="navbar dropdown d-flex bg-light mb-3 h5 justify-content-between">
    <a class="nav-link border-right text-secondary" href="home.php">VOLTAR</a>
    <a class="nav-link border-left text-secondary" href=""><?=$_SESSION['login'] ?></a>
  </div>