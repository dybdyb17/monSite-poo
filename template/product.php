<h1><?= $title ?></h1>

<form action="" method="post" novalidate>

    <div>
        <label for="title">Nom du produit</label>
        <input type="text" id="title" name="title" placeholder="Nom du produit">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label for="price">Prix</label>
        <input type="number" id="price" name="price">
    </div>

    <button type="submit">Soumettre</button>
</form>