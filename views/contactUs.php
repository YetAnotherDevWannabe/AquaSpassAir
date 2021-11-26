<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>Accueil - AQUASPASS'AIR</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/contactUs.css">
</head>

<body>
	<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>


	<div class="contact-clean">
		<form method="post">
			<h2 class="text-center">Votre vis compte !</h2>
			<div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nom complet"></div>
			<div class="form-group mt-2"><input class="form-control" type="email" name="email" placeholder="Email"></div>
			<div class="form-group mt-2"><textarea class="form-control" rows="14" name="message" placeholder="Message"></textarea></div>
			<div class="form-check mt-3 col-8 offset-2">
				<input class="form-check-input" type="checkbox" id="newsletter" checked>
				<label class="form-check-label text-center" for="newsletter" checked>&nbsp;S'abonner à la newsletter</label>
			</div>
			<div class="form-group mt-3"><button class="btn-gradient col-12 text-light" type="submit">S'abonner</button></div>
		</form>
	</div>



	<?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>

</html>