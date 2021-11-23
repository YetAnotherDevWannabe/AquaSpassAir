<?php

// Inclusion des Contrôleurs du site
use App\Controllers\MainController;

// Instanciation de la classe des contrôleurs
$mainController = new MainController();

// Liste des routes avec leurs Contrôleur
// Chaque URL correspond à une page du site
switch ( ROUTE )
{
	// Page d' accueil
	case '/';
		$mainController->home();
		break;


	/*
	 * Gestion des sessions
	 */
	// Page de connexion
	case '/signin/';
		$mainController->signIn();
		break;

	// Page de déconnexion
	case '/signout/';
		$mainController->signOut();
		break;


	/*
	 * Gestion du profil
	 */
	// Page d' inscription
	case '/signup/';
		$mainController->signUp();
		break;



	/*
	 * Autres vues
	 */
	// Si aucun Contrôleur ne correspond à la route demandé, c' est le Contrôleur de la page 404 qui sera chargé
	default:
		$mainController->page404();
		break;
}