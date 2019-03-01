
<html lang="en">
<?php
  include_once('head.php')
?>
<body>
<?php
  session_start();
  $user_tmp = $_SESSION['user'];

?>
<div class="wrap-login100">

    <h1 class="titre1">
      <i class="fas fa-check"></i>
      Bravo <?= $user_tmp ?> !
    </h1>
    <h2 class="titre2">Vous êtes connecté.</h2>

    <nav class="nav_success row">

      <div class="offset-3"></div>
      <div class="col-3">
        <a href="" class="link">
          accueil
        </a>
      </div>

      <div class="col-3">
        <a href="" class="link">
          tableau de bord
        </a>
      </div>
      <div class="offset-3"></div>
    </nav>
</div>


<div id="dropDownSelect1"></div>

<?php
  include_once('scripts.php')
?>
</body>
</html