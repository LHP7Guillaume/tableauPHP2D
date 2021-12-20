<?php

require 'controller/indexcontroller.php';


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


    <title>Tableau 2D</title>
</head>

<body class="" style="background-image: url(assets/img/background1.jpeg); background-size:auto">


    <div class="row">
        <h1 style="color: white;" class="col-lg text-center mt-5 mb-5">Guigui les bon tuyaux, <br> vous présente : "les marchés de Noel" </h1>
    </div>


    <?php foreach ($arrayGuillaume as $event) { ?>

        <div class="text-center justify-content-center mt-5 row">
            <div class="card " style="max-width: 900px; background-image: url(assets/img/backcard3.jpeg); padding-left:0;">
                <div class="row g-0">
                    <div class="col-md-4 ">
                        <img src="assets/img/<?= $event["picture"] ?>" class="img-fluid rounded-start " alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $event["name"] ?></h5>
                            <!-- modification de la date en version francaise -->
                            <p class="card-text"><?= date_format(date_create($event["start"]), 'd/m/y') ?> au <?= date_format(date_create($event["end"]), 'd/m/y') ?></p>
                            <p class="card-text"><small class="text-muted"><?= $event["price"] ?></small></p>
                            <div class="position-absolute bottom-0 end-0 m-5">
                                <a class="btn btn-outline-success" type="button" href="views/details.php?id=<?= $event['id'] ?>">+ d'info</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>





</body>

</html>