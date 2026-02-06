<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

<h1><?= $title ?></h1>

<form action="" method="post" enctype="multipart/form-data">

    <div>
        <label for="picture">Image</label>
        <?php if ($product->getPicture()): ?>
            <img src="<?= $product->getPicture() ?>" alt="Image actuelle" width="200">
        <?php endif; ?>
        <input id="picture" type="file" name="picture">
    </div>

    <div>
        <label for="title">Titre</label>
        <input id="title" type="text" name="title" value="<?= $product->getTitle() ?>" required>
    </div>

    <div>
        <label for="price">Prix</label>
        <input id="price" type="number" name="price" value="<?= $product->getPrice() ?>" required>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" required><?= $product->getDescription() ?></textarea>
    </div>

    <button type="submit">Modifier</button>
</form>

</body>
</html>