<?php

require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Genre.php"; 

$genres_1 = new Genre(["Azione", "Avventura"]);

$plot_1 = "Lo scienziato Bruce Banner ha qualche problema di controllo dell'ira. Nel corso di un esperimento
andato male l'uomo si trasforma in un mostro verde che usa la rabbia per salvare le vite umane.";
$plot_2 = "Il morso di un ragno mutante dona degli incredibili, e inaspettati, poteri al giovane Peter Parker, che li usa nella guerra contro un minaccioso nemico.
";

$movie_1 = new Movie("Hulk", 2003, 138, $genres_1, $plot_1);
$movie_2 = new Movie("Spider-Man", 2002, 121, $genres_1, $plot_2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="container py-5">
        <h1 class="mb-5">Film</h1>

        <ul>
            <li>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $movie_1 -> name ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            Anno d'uscita:
                            <?= $movie_1 -> release_date ?>
                        </h6>
                        <h6 class="card-subtitle mb-2">
                            Durata:
                            <?= $movie_1 -> duration ?>
                            m
                        </h6>
                        <p class="card-text">
                            <?= $movie_1 -> getAbstract() ?>
                        </p>
                        <h6 class="card-subtitle mb-4">
                            Genere principale:
                        </h6>
                        <span class="h6 text-muted d-block">
                            <?= $movie_1 -> genres -> genres[0]  ?>
                        </span>
                    </div>
                </div>
            </li>

            <?php include __DIR__ . "/template/movie_card.php" ?>
        </ul>
    </div>



</body>

</html>