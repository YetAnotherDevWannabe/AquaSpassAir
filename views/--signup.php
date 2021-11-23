<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>Sign-up - MuscleWiki</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
</head>

<body>
	<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>
	<div class="container">

		<div class="row my-5">
			<div class="col-12 col-lg-10 offset-1">
				<h1 class="text-center">Sign-up <span class="badge bg-primary">MuscleWiki</span></h1>
			</div>
		</div>

		<div class="row">
			<?php
			if ( isset($success) )
			{
				echo '<p class="alert alert-success">' . $success . '</p>';
			}
			else
			{

				if ( isset($errors['server']) )
				{
					echo '<p class="alert alert-danger">' . $errors['server'] . '</p>';
				}
				?>

				<form method="POST" action="<?= PUBLIC_PATH . 'signup/' ?>" class="col-12 col-md-6 offset-md-3">

					<div class="mb-2">
						<label for="email" class="form-label">Email</label>
						<input id="email"
							   class="form-control<?= isset($errors['email']) ? ' is-invalid' : ''; ?>"
							   name="email"
							   type="text"
							   value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
						>
						<?= isset($errors['email']) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>
					</div>

					<div class="mb-4">
						<label for="username" class="form-label">Username</label>
						<input id="username"
							   class="form-control<?= isset($errors['username']) ? ' is-invalid' : ''; ?>"
							   name="username"
							   type="text"
							   value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
						>
						<?= isset($errors['firstname']) ? '<div class="invalid-feedback">' . $errors['firstname'] . '</div>' : ''; ?>
					</div>

					<div class="mb-2">
						<label for="password" class="form-label">Password</label>
						<input id="password"
							   class="form-control<?= isset($errors['password']) ? ' is-invalid' : ''; ?>"
							   name="password"
							   type="password"
						>
						<?= isset($errors['password']) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>
					</div>

					<div class="mb-3">
						<label for="confirm-password" class="form-label">Confirm password</label>
						<input id="confirm-password"
							   class="form-control<?= isset($errors['confirm-password']) ? ' is-invalid' : ''; ?>"
							   name="confirm-password"
							   type="password"
						>
						<?= isset($errors['confirm-password']) ? '<div class="invalid-feedback">' . $errors['confirm-password'] . '</div>' : ''; ?>
					</div>

					<div class="mb-3">
						<input type="submit" class="col-12 btn btn-success" value="Create account">
					</div>

				</form>

				<?php
			}
			?>
		</div>


	</div>

	</div>


	<?php include VIEWS_DIR . '/partials/footer.php'; ?>
</body>
</html>