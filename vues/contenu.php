<?php

// Si une page est demandée, on récupère sa valeur
if (isset($_GET["rub"])) {
	$page=$_GET["rub"];
} else {
    $page='accueil';
}

// Liste des pages du site
$pages = array(
'liste_items',
'liste_utilisateur',
'liste_composant',
'accueil',
'recherche_machine',
'recherche_peripheriques',
'fiche_machine'
);

// Si la page fait partie de la liste des pages, on l'inclut
if (in_array($page,$pages)) {
	include "pages/".$page.".php";
}
else
{
    // Sinon, on affiche un message d'erreur
	include "pages/404.php";
}

?>