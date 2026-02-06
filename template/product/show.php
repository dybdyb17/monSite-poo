<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<h1><?= $product->getTitle() ?></h1>

<img src="<?= $product->getPicture() ?>" alt="<?= $product->getTitle() ?>">

<p>Voici mon prix : <?= $product->getPrice() ?></p>
<p>Voici ma description : <?= $product->getDescription() ?></p>

<a href="/product/<?= $product->getId() ?>/edit">Modifier</a>

</body>
</html>