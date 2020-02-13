<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="<?= site_url("catalogue/panier") ?>">panier</a> <?= $this->basket->get_quantity_sum() ?> / <?= $this->basket->get_price_sum("price") ?>
    <h1>Liste de disques</h1>

    <?php foreach($liste as $disc): ?>
        <div>
            <?= $disc->disc_title ?>
            <a href="<?= site_url("catalogue/add/") . $disc->disc_id ?>">ajouter au panier</a>
        </div>
    <?php endforeach; ?>
</body>
</html>