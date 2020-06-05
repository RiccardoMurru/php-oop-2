<?php
include_once __DIR__ . '/classes/Jacket.php';
include_once __DIR__ . '/classes/Shirt.php';

$jacket = new Jacket('giacca', 'giacca di pelle', 450, 'giacca estiva', 'pelle');
$shirt = new Shirt('camicia', 'camicia elegante', 170, 'armani', 38, 'bianco');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div>
            <ul>
                <li>
                    Nome: <?php echo $jacket->name; ?>
                </li>
                <li>
                    Descrizione: <?php echo $jacket->description; ?>
                </li>
                <li>
                    Tipologia: <?php echo $jacket->type; ?>
                </li>
                <li>
                    Materiale: <?php echo $jacket->material; ?>
                </li>
                <li>
                    Prezzo: € <?php echo $jacket->price; ?>
                </li>
                <li>
                    Prezzo scontato del 20%: €
                    <?php echo $jacket->calcDiscount(20); ?>
                </li>
            </ul>
        </div>
        <div>
            <ul>
                <li>
                    Nome: <?php echo $shirt->name; ?>
                </li>
                <li>
                    Descrizione: <?php echo $shirt->description; ?>
                </li>
                <li>
                    Marca: <?php echo $shirt->brand; ?>
                </li>
                <li>
                    Taglia: <?php echo $shirt->size; ?>
                </li>
                <li>
                    Prezzo: € <?php echo $shirt->price; ?>
                </li>
                <li>
                    Prezzo scontato del 20%: €
                    <?php echo $shirt->calcDiscount(20); ?>
                </li>
            </ul>
        </div>
    </main>
</body>

</html>