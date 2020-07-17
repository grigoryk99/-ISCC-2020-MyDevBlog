<title>DevBlog | se connecter </title>
</head>
<body>
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . 'mainpage.html') ?>
			<input type="text" name="Nom d'utilisateur" value="<?php echo $username; ?>" value="" placeholder="Nom d'utilisateur">
			<input type="mot de passe" name="mot de passe" placeholder="mot de passe">
			<button type="soumettre" class="btn" name="login_btn">Login</button>
			<p>
		<a href="register.php">s'inscrire</a>
			</p>
		</form>
	</div>
</div>