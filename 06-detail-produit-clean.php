<?php
require_once './06-products.php';

$id = $_GET['id'];

$name           = $products[$id]['name'];
$vendor         = $products[$id]['vendor'];
$description    = $products[$id]['description'];
$scale          = $products[$id]['scale'];
$price          = $products[$id]['price'];

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
    <h1>Détail du produit "<?=$name?>" (<?=$id?>)</h1>

    <p><strong>Nom&nbsp;:</strong> <?=$name?></p>
    <p><strong>Marque&nbsp;:</strong> <?=$vendor?></p>
    <p><strong>Description&nbsp;:</strong> <?=$description?></p>
    <p><strong>Échelle&nbsp;:</strong> <?=$scale?></p>
    <p><strong>Prix&nbsp;:</strong> <?=$price?>$</p>
</body>
</html>