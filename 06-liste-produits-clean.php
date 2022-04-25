<?php
require_once './06-products.php';

// echo '<h1>Liste des produits</h1>';


// echo '<ul>';
// foreach ($products as $id => $leProduit) {
//     $productName = $leProduit['name'];
//     echo "<li><a href=\"06-detail-produit.php?id=$id\">$productName</a></li>";
// }
// echo '</ul>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de</title>
</head>
<body>
    
    <h1>Liste de nos produits</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Marque</th>
            <th>Prix ($)</th>
        </tr>

        <?php foreach ($products as $id => $leProduit) : ?>
            <tr>
                <td><?=$id?></td>
                <td><a href="06-detail-produit-clean.php?id=<?=$id?>"><?=$leProduit['name']?></a></td>
                <td><?=$leProduit['vendor']?></td>
                <td><?=$leProduit['price']?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>