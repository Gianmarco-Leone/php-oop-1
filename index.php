<?php
    class Movie {
        public $name;
        public $release_date;
        public $duration;
        public $genres;

        public function __construct(string $_name, int $_release_date, int $_duration, Genre $_genres)
        {
            $this -> name = $_name;
            $this -> setReleaseDate($_release_date);
            $this -> duration = $_duration;
            $this -> genres = $_genres;
        }

        public function setReleaseDate($date) {
            if (!is_numeric($date)) return false;

            $this -> release_date = $date;
        }
    }

    class Genre {
        public $genres;

        public function __construct(array $_genres)
        {
            $this -> genres = $_genres;
        }
    }

    $genres_1 = new Genre(["Azione", "Avventura"]);


    $movie_1 = new Movie("Hulk", 2003, 138, $genres_1);
    $movie_2 = new Movie("Spider-Man", 2002, 121, $genres_1);
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
    <style>
    ul {
        list-style: none;
        margin: 1rem;
    }
    </style>

    <h1>Film</h1>

    <ul>
        <li>
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

                <li>
                    Genere principale:
                    <?= $movie_2 -> genres -> genres[0]  ?>
                </li>
            </ul>
        </li>

        <li>
            <ul>
                <li>
                    Nome:
                    <?= $movie_2 -> name ?>
                </li>

                <li>
                    Anno d'uscita:
                    <?= $movie_2 -> release_date ?>
                </li>

                <li>
                    Durata:
                    <?= $movie_2 -> duration ?>
                    m
                </li>

                <li>
                    Genere principale:
                    <ul>
                        <?php foreach($genres_1 ->genres as $genre) { ?>
                        <li>
                            <?= $genre ?>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>


</body>

</html>