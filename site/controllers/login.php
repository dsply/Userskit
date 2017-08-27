<?php

return function($site, $pages, $page) {

	// Ne pas afficher l'écran de connexion aux utilisateurs déjà connectés
	if($site->user()) go('/');

	// Gérer la soumission du formulaire
	if(r::is('post') and get('login')) {

		// Chercher l'utilisateur par email et exécuter
		// la méthode de connexion avec le mot de passe
		if($user = site()->users()->findBy('email',get('email')) and $user->login(get('password'))) {
			// Redirection vers la page account
			// si la connexion a été réussie
			go('account');
		} else {
			$error = 'Nom d\'utilisateur ou mot de passe invalide.';
		}

	} else {
		$error = false;
	}

	return compact('error');

};