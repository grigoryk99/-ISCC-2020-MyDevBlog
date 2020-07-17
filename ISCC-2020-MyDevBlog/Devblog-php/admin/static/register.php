<?php  include('config.php'); ?>

<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>Devblog | Connecter </title>
</head>
<body>

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on LifeBlog</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="mot_de_passe_" name="mot_de_passe_1" placeholder="mot_de_passe_1">
			<input type="mot_de_passe_1" name="mot_de_passe_1_2" placeholder="Confirmation mot de passe">
			<button type="soumettre" class="btn" name="reg_user">S'inscrire</button>
			<p>
			</p>
		</form>
	</div>
</div>

