<?php

$content = "Bonne visite !";
$titre = "Nos produits";
require "template.php";
?>
<div class="container">
    <div class="row">
        <?php foreach ($panneaux as $panneau) : ?>
            <div class="col-lg-4">

                <div class="card border-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header"><?= $panneau['prix']; ?>€</div>
                    <div class="card-body">
                        <h4 class="card-title"><?= $panneau['nom']; ?></h4>
                        <p class="card-text"><?= $panneau['description']; ?></p>
                        <p class="card-text"><?= $panneau['taille']; ?></p>
                    </div>
                    <button type="button" class="btn btn-outline-warning"><a style="text-decoration:none;color:white " ; href="/php_optiondev/MVC/panneau-dadministration/modif-produit/<?= $panneau['id']; ?>">Modifier</a></button>
                    <button type="button" class="btn btn-outline-info"><a style="text-decoration:none;color:white" ; href="/php_optiondev/MVC/panneau-dadministration/supp-produit/<?= $panneau['id']; ?>">Supprimer</a></button>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>


<!-- 

        <tr>
            <td class="align-middle"></td>
            <td class="align-middle"><button class="btn btn-warning">Modifier</button></td>
            <form action="restaurants.class.php/" method="POST">

                <td class="align-middle"><button class="btn btn-danger" type="submit">Supprimer</button></td>
            </form>
        </tr> -->