<!DOCTYPE HTML>
<html lang="fr">
<head>
	<title>Log-in - MuscleWiki</title>
	<?php include VIEWS_DIR . '/partials/header.php'; ?>
	<link rel="stylesheet" href="<?= PUBLIC_PATH; ?>/css/signin.css">
</head>

<body>
<?php include VIEWS_DIR . '/partials/top-navbar.php'; ?>

<?php
if ( isset($success) )
{
	echo '<p class="alert alert-success fw-bold text-center">' . $success . '</p>';
}
else
{
	if ( isset($errors['server']) )
	{
		echo '<p class="alert alert-danger fw-bold text-center">' . $errors['server'] . '</p>';
	}
	?>

	<div class="container left-panel-active">

		<!-- Sign In -->
		<div class="container__form container--signin">
			<form method="POST" action="<?= PUBLIC_PATH . 'signin/' ?>" class="form" id="signInForm">
				<h2 class="form__title">Sign In</h2>

				<!-- Email -->
				<input type="email"
					name="email"
					placeholder="Email"
					class="input<?= isset($errors['email']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
				/>
				<?= isset($errors['email']) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>

				<!-- Password -->
				<input type="password"
					name="password"
					placeholder="Password"
					class="input<?= isset($errors['password']) ? ' is-invalid' : ''; ?>"
				/>
				<?= isset($errors['password']) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>

				<!-- Password Reset -->
				<a href="#" class="link">Forgot your password?</a>

				<!-- Button -->
				<input type="submit" class="btn" value="Sign In">
			</form>
		</div>

		<!-- Sign Up -->
		<div class="container__form container--signup">
			<form method="POST" action="<?= PUBLIC_PATH . 'signup/' ?>" class="form" id="signUpForm">
				<h2 class="form__title">Sign Up</h2>

				<!-- Username -->
				<input type="text"
					name="username"
					placeholder="Username"
					class="input<?= isset($errors['username']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
				/>
				<?= isset($errors['firstname']) ? '<div class="invalid-feedback">' . $errors['firstname'] . '</div>' : ''; ?>

				<!-- Email -->
				<input type="email"
					name="email"
					placeholder="Email"
					class="input<?= isset($errors['email']) ? ' is-invalid' : ''; ?>"
					value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
				/>
				<?= isset($errors['email']) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>

				<!-- Password -->
				<input type="password"
					name="password"
					placeholder="Password"
					class="input<?= isset($errors['password']) ? ' is-invalid' : ''; ?>"
				/>
				<?= isset($errors['password']) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>

				<!-- Button -->
				<input type="submit" class="btn" value="Sign Up">
			</form>
		</div>

		<!-- Overlay -->
		<div class="container__overlay">
			<div class="overlay">
				<div class="overlay__panel overlay--left">
					<button class="btn" id="signIn">Sign In</button>
				</div>
				<div class="overlay__panel overlay--right">
					<button class="btn" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>

	</div>

	<?php
}
?>

<?php include VIEWS_DIR . '/partials/footer.php'; ?>
<script src="<?= PUBLIC_PATH; ?>/js/signin.js"></script>
</body>
</html>