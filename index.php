<?php

// Importo file Classi
require_once __DIR__ . "/models/Movie.php";
require_once __DIR__ . "/models/Genre.php"; 

// Importo file dati
require_once __DIR__ . "/data/db.php";

// Creo un'istanza della classe Genre
$genres_1 = new Genre(["Azione", "Avventura"]);

// Trasformo l'array associatico che ho nel file db in un array di oggetti
$movie_obj_list = [];
foreach ($movies as $movie) {
    $movie_obj_list[] = new Movie(
        $movie["name"],
        $movie["release_date"],
        $movie["duration"],
        $genres_1,
        $movie["plot"],
    );
}
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
        <h1 class="mb-5 text-center">Film</h1>

        <ul class="d-flex flex-wrap justify-content-center">
            <!-- Per ogni film nella lista dei film -->
            <?php foreach($movie_obj_list as $movie) { ?>

            <!-- Includo il file template che stampa la card -->
            <?php include __DIR__ . "/template/movie_card.php" ?>

            <?php } ?>
        </ul>
    </div>
</body>

</html>