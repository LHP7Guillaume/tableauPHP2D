<?php

require_once '../controller/detailsController.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <title>Document</title>

</head>

<body class="" style="background-image: url(../assets/img/background1.jpeg); background-size:auto">


    <div class="text-center justify-content-center mt-5 row">
        <div class="card" style="width: 18rem; ">
            <img src="../assets/img/<?= $picture ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $name ?></h5>
                <p class="card-text"><?= $startdate ?> au <?= $enddate ?></p>
                <p class="card-text"><?= $price ?></small></p>
                <p class="card-text"><?= $summary ?></p>
                <div class="card-text">
                    <?= $place ?>
                </div>
                <a href="../index.php" value="ok" type="submit" class="btn btn-outline-primary">Retour</a>
            </div>
        </div>
    </div>



</body>

</html>