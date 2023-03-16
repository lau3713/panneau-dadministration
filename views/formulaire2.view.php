<?php

$content = "Veuillez remplir ce formulaire afin de modifier ce produit";
$titre = "modifier un produit";
require "template.php";

?>
<div class="container">
    <div class="bs-docs-section">
        <div class="col-lg-6">
            <form action="/php_optiondev/MVC/panneau-dadministration/modif-produit/" method="POST" class="form">
                <fieldset>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                        <label for="nom" class="form-label mt-4">Modifier le nom : </label>
                        <input type="text" class="form-control" name="nom" id="nom" value="<?= $produit['nom'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for=" description"> Modifier la description : </label>
                        <input type="text" class="form-control" name="description" id="description" value="<?= $produit['description'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="taille">Modifier la taille : </label>
                        <input type="text" class="form-control" name="taille" id="taille" value="<?= $produit['taille'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="prix">Modifier le prix : </label>
                        <input type="text" class="form-control" name="prix" id="prix" value="<?= $produit['prix'] ?>" required>
                        <button type="submit" class="btn btn-primary" name="modifier">Modifier le produit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>