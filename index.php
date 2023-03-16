<?php

require_once "controllers/PanneauController.php";

$panneauController = new PanneauController;

if (empty($_GET['page'])) {
    $panneauController->afficherPanneau();
} else {
    switch ($_GET['page']) {
        case "accueil":
            $panneauController->afficherPanneau();
            break;
        case "panneau_new":
            $panneauController->afficherFormulaire();
            break;
        case "modif-produit":
            $panneauController->modifierPanneau($_GET['id']);
            break;
        case "ajout-produit":
            $panneauController->ajouterPanneau();
            break;
        case "supp-produit":
            $panneauController->supprimerPanneau($_GET['id']);
            break;
    }
}
