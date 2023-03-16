<?php
require_once "Model.class.php";

class Panneau extends Model
{
    public function chargementPanneau()
    {
        $select = $this->getBDD()->prepare("SELECT * FROM produits");
        $select->execute();
        return $mesProduits = $select->fetchAll();
    }
    public function ajoutProduits(string $nom, string $description, string $taille, int $prix)
    {
        $insert = "INSERT INTO produits(nom, description, taille, prix) VALUES (:nom,:description,:taille,:prix)";
        $insertProduit = $this->getBDD()->prepare($insert);
        $insertProduit->execute([
            'nom' => $nom,
            'description' => $description,
            'taille' => $taille,
            'prix' => $prix,
        ]);
    }

    public function modifierProduit(string $nom, string $description, string $taille, int $prix, $id)
    {
        $edit = "UPDATE produits SET nom=:nom, description=:description, taille=:taille, prix=:prix WHERE id=:id";
        $editProduit = $this->getBDD()->prepare($edit);
        $editProduit->execute([
            'nom' => $nom,
            'description' => $description,
            'taille' => $taille,
            'prix' => $prix,
            'id' => $id

        ]);
    }

    public function getProduitById($id)
    {
        $selectId = "SELECT * FROM produits WHERE id=:id";
        $selectIdProduit = $this->getBDD()->prepare($selectId);
        $selectIdProduit->execute(['id' => $id]);
        return $selectIdProduit->fetch(PDO::FETCH_ASSOC);
    }

    public function supprimerProduit(int $id)
    {
        $delete = "DELETE FROM produits WHERE id = :id";
        $deleteProduit = $this->getBDD()->prepare($delete);
        $deleteProduit->execute([
            'id' => $id
        ]);
    }
}
