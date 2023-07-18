<?php
    //include_once('db.php');
    include_once('dao/CarDAO.php');

    $carDao =  new CarDAO($conn);

    $cars = $carDao->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <label for="brand">Marca do Carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>

    <div>
        <label for="km">Kilometragem:</label>
        <input type="text" name="km" placeholder="Insira o km">
    </div>

    <div>
        <label for="color">Cor do Carro:</label>
        <input type="text" name="color" placeholder="Cor do carro">
    </div>
    <input type="submit" value="Salvar">
</form>

<ul>
    <?php foreach ($cars as $car): ?>
        <li>
            <?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?>
        </li>
    <?php endforeach ?>
</ul>