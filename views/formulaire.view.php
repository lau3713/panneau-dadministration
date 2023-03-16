<?php

$content = "Veuillez remplir ce formulaire afin d'ajouter un produit";
$titre = "Ajouter un produit";
require "template.php";

?>

<div class="container">
    <div class="bs-docs-section">
        <div class="col-lg-6">
            <form action="/php_optiondev/MVC/panneau-dadministration/ajout-produit/" method="POST" class="form">
                <fieldset>
                    <div class="form-group">
                        <label for="nom" class="form-label mt-4">Entrer le nom: </label>
                        <input type="text" class="form-control" name="nom" id="nom" required>
                    </div>
                    <div class="form-group">
                        <label for=" description"> Entrer une description: </label>
                        <input type="text" class="form-control" name="description" id="description" required>
                    </div>
                    <div class="form-group">
                        <label for="taille">Entrer la taille: </label>
                        <input type="text" class="form-control" name="taille" id="taille" required>
                    </div>
                    <div class="form-group">
                        <label for="prix">Entrer le prix: </label>
                        <input type="text" class="form-control" name="prix" id="prix" required>
                        <button type="submit" class="btn btn-primary">Ajouter un produit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>