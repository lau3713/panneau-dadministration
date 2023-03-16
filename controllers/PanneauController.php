<?php
require_once "models/Panneau.class.php";
class PanneauController
{
    private $panneau;


    public function __construct()
    {
        $this->panneau = new Panneau;
    }

    public function afficherPanneau()
    {
        $panneaux = $this->panneau->chargementPanneau();
        require "views/produits.views.php";
    }

    public function afficherFormulaire()
    {
        require "views/formulaire.view.php";
    }

    public function ajouterPanneau()
    {
        if (isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $taille = $_POST['taille'];
            $prix = $_POST['prix'];
            $this->panneau->ajoutProduits($nom, $description, $taille, $prix);
            header('Location: ' . "/php_optiondev/MVC/panneau-dadministration/");
        }
    }

    public function modifierPanneau($id)
    {


        if ($_GET['id']) {
            $produit = $this->panneau->getProduitById($id);
            require "views/formulaire2.view.php";
        } else {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $taille = $_POST['taille'];
            $prix = $_POST['prix'];
            $this->panneau->modifierProduit($nom, $description, $taille, $prix, $id);
            header('Location: ' . "/php_optiondev/MVC/panneau-dadministration/");
        }
    }


    public function supprimerPanneau($id)
    {
        $this->panneau->supprimerProduit($id);
        header('Location: ' . "/php_optiondev/MVC/panneau-dadministration/");
    }
}
