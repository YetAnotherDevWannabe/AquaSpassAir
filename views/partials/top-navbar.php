<nav class="navbar navbar-expand-custom navbar-mainbg d-flex">
	<a class="navbar-brand navbar-logo" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fas fa-bars text-white"></i>
	</button>
	<div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<div class="hori-selector">
				<div class="left"></div>
				<div class="right"></div>
			</div>

			<!-- Home -->
			<li class="nav-item<?= (ROUTE == '/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>"><i class="fas fa-home-alt"></i>Home</a>
			</li>

			<!-- Newsletter -->
			<li class="nav-item<?= (ROUTE == '/XXX/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>xxx/"><i class="far fa-newspaper"></i>Newsletter</a>
			</li>

			<!-- Reservation -->
			<li class="nav-item<?= (ROUTE == '/XXX/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>xxx/"><i class="far fa-calendar-alt"></i>Reservation</a>
			</li>

			<!-- Acheter une place -->
			<li class="nav-item<?= (ROUTE == '/XXX/') ? ' active' : ''; ?>">
				<a class="nav-link" href="<?= PUBLIC_PATH; ?>xxx/"><i class="fas fa-shopping-cart"></i>Acheter une place</a>
			</li>

			<?php
			if (isConnected())
			{
				?>
				<!-- Sign Out -->
				<li class="nav-item<?= (ROUTE == '/signout/') ? ' active' : ''; ?>">
					<a class="nav-link" href="<?= PUBLIC_PATH; ?>signout/"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
				</li>
				<?php
			}
			else
			{
				?>
				<!-- Sign In -->
				<li class="nav-item<?= (ROUTE == '/signin/') ? ' active' : ''; ?><?= (ROUTE == '/signup/') ? ' active' : ''; ?>">
					<a class="nav-link" href="<?= PUBLIC_PATH; ?>signin/"><i class="fas fa-sign-in-alt"></i>Sign In</a>
				</li>
				<?php
			}
			?>

		</ul>
	</div>
</nav>