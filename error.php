<html lang="fr">
<head>
  <title>Login V3</title>
  <?php
    include_once('head.php')
  ?>
</head>
<body>
<?php

  session_start();
  $user_tmp = $_SESSION['user'];


?>

<div class="wrap-login100">
  <h1 class='titre1'>
    <a href="login.php">
      <i class="error_ic fas fa-times"></i>
    </a>
    Mauvais mot de passe !
  </h1>
  <h2 class="titre2">
    Cher <?= $user_tmp ?>...
  </h2>
  <h2 class="titre2">
    Il va falloir tout te retaper!
  </h2>

  <nav class="nav_success row">

    <div class="offset-3"></div>
    <div class="col-6">
      <a href="login.php" class="link">
        <i class="fas fa-undo-alt"></i>
        Retour au formulaire
      </a>
    </div>


    <div class="offset-3"></div>
  </nav>
</div>

<?php
  include_once('scripts.php')
?>


</body>
</html