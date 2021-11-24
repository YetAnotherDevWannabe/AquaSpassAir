<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>Photos - AQUASPASS'AIR</title>
	<?php include VIEWS_DIR .'/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/photos.css">
</head>

<body>
<?php include VIEWS_DIR .'/partials/top-navbar.php'; ?>



<div class="containered">

	<div class="page-headered">
		<h1>Bootstrap 3 default carousel with swipe and touch gestures</h1>
		<p class="lead">How to add the swipes gesture to comand the Bootstrap 3 carousel on mobile devices.</p>
		<p>Made by <strong>Andrea Rufo</strong>, more info and tutorial on <a href="http://www.andrearufo.it/">andrearufo.it</a></p>
	</div>-


	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="..." class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="..." class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

</div>



<?php include VIEWS_DIR .'/partials/footer.php'; ?>
<script src="<?= PUBLIC_PATH; ?>/js/photos.js"></script>
</body>
</html>