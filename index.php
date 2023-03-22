<?php
    class Movie {
        public $name;
        public $release_date;
        public $duration;

    }

    $movie_1 = new Movie();
    $movie_1 -> name = "Hulk";
    $movie_1 -> release_date = 2008;
    $movie_1 -> duration = 120;

    // var_dump($movie_1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>
</head>

<body>

    <h1>Film</h1>

    <ul>
        <li>
            Nome:
            <?= $movie_1 -> name ?>
        </li>

        <li>
            Anno d'uscita:
            <?= $movie_1 -> release_date ?>
        </li>

        <li>
            Durata:
            <?= $movie_1 -> duration ?>
        </li>
    </ul>
</body>

</html>