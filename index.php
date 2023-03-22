<?php
    class Movie {
        public $name;
        public $release_date;
        public $duration;

        public function __construct($_name, $_release_date, $_duration)
        {
            $this -> name = $_name;
            $this -> setReleaseDate($_release_date);
            $this -> duration = $_duration;
        }

        public function setReleaseDate($date) {
            if (!is_numeric($date)) return false;

            $this -> release_date = $date;
        }
    }

    $movie_1 = new Movie("Hulk", 2003, 138);
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
            m
        </li>
    </ul>
</body>

</html>