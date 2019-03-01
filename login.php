
<html lang="fr">
<head>
	<title>Login V3</title>

  <?php
//    metadonnées
    include_once('head.php')
  ?>
</head>
<body>
<?php
  $utilisateur =[

    'username'=>'kojeje',
    'pass'=>'admin'


  ];

  //  Initialise la variable $user_tmp
  $user_tmp =$utilisateur['username'];

  //Si le formulaire envoyé n'est pas vide
  if(!empty($_POST)) {

    //Et si le pseudo du compte est équivalent à celui saisi dans le formulaire
    if ($utilisateur['username'] == $_POST['username']) {

      //Et si le pseudo du compte est équivalent à celui saisi dans le formulaire
      if ($utilisateur['pass'] == $_POST['pass']) {

        // On ouvre une session
        session_start();

        // On initialise la variable de session (index: 'user'), équivalente à $utilisateur['username']
        $_SESSION['user'] = $utilisateur['username'];

        // Redirection vers la page success_login.php
        header('Location: success_login.php');
        exit();
        //OU si mot de pass incorrect
      } else {
        // On initialise la variable de session (index: 'user'), équivalente à $utilisateur['username']
        $_SESSION['user'] = $utilisateur['username'];
        //Afficher la fenetre d'erreur
         header('Location: error.php');
        exit();

      }
    } else {
      echo "utilisateur inconnu";
    }
  }

?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">

					<span class="login100-form-logo">
					  <i class="far fa-sign-in-alt"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Se connecter
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
            <label class="label" for="username">pseudo</label>
						<input class="input100" type="text" name="username" value="<?= $user_tmp ?>" placeholder="entrez votre pseudo">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
            <label class="label" for="pass">mot de passe</label>
						<input class="input100" type="password" name="pass" placeholder="entrez votre mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


<?php
// balises script
  include_once('scripts.php')
?>


</body>
</html