<?php snippet('header') ?>

<main class="main" role="main">

	<h1 class="title center"><?= $page->subtitle()->or($page->title()) ?></h1>

	<form method="post" class="burger">

		<?php if(isset($success)): ?>
		<div class="alert success">
			<?= $success ?>
		</div>
		<?php endif ?>

		<?php if($error): ?>
		<div class="alert error">
			<p><?= $error ?></p>
		</div>
		<?php endif ?>

		<div class="field">
			<label for="firstname">Prénom</label>
			<input type="text" id="firstname" name="firstname">
		</div>
		<div class="field">
			<label for="lastname">Nom</label>
			<input type="text" id="lastname" name="lastname">
		</div>
		<div class="field">
			<label for="email">Adresse email</label>
			<input type="text" id="email" name="email">
		</div>
		<div class="field honeypot">
			<label for="subject">Honeypot</label>
			<input type="text" id="subject" name="subject">
			<small class="help">For Robots.</small>
		</div>
		<div class="field">
			<input class="btn" type="submit" name="register" value="Inscription">
			<a class="link" href="<?= url('login') ?>">Se connecter</a>
		</div>
	</form>

</main>

<?php snippet('footer') ?>