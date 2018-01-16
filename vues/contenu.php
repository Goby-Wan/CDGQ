<?php
$page="accueil";

if (isset($_GET["rub"])) {
	$page=$_GET["rub"];
}
include $page.".php";





















/*
if ($page=='liste_items' || $page=='liste_utilisateur'
|| $page=='liste_composant'
|| $page=='accueil'
|| $page=='recherche_machine'
|| $page=='recherche_peripheriques'
|| $page=='fiche_machine') {
	include $page.".php";
}
else
{
	include "404.php";
}
*/
?>
