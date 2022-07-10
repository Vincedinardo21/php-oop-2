<?php
    // include __DIR__ . "/User.php";
    include __DIR__ . "/Product.php";
    include __DIR__ . "/Food.php";
    include __DIR__ . "/Giochi.php";

    $food1 = new Food("Food 1", 20, 3);
    $food1->name = "Croccantini";
    $food1->categoria = "Cibo";
    $food1->rate = 5;
    $food1->price = 6;

    $gioco1 = new Giochi(30, 20, "Plastica");
    $gioco1->name = "Osso di Plastica";
    $gioco1->categoria = "Giochi";
    $gioco1->rate = 4;
    $gioco1->price = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <h3><?php echo $gioco1->name?></h3>
    <div>Categoria: <?php echo $gioco1->categoria?></div>
    <div>Dimensione: <?php echo $gioco1->dimensione?> cm</div>
    <div>Peso: <?php echo $gioco1->peso?> g</div>
    <div>Materiale: <?php echo $gioco1->materiale?></div>
    <div>Voto: <?php echo $gioco1->rate?></div>
    <h4>Prezzo: <?php echo $gioco1->price?> €</h4>

    <br>

    <h3><?php echo $food1->name?></h3>
    <div>Categoria: <?php echo $food1->categoria?></div>
    <div>Energia: <?php echo $food1->energy?> kcal</div>
    <div>Voto: <?php echo $food1->rate?></div>
    <h4>Prezzo: <?php echo $food1->price?> €</h4>
</body>
</html>