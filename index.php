<?php
    class Movie {
        public $name;
        public $release_date;
        public $duration;
        public $genres;
        public $plot;

        public function __construct(string $_name, int $_release_date, int $_duration, Genre $_genres, string $_plot = "unknown")
        {
            $this -> name = $_name;
            $this -> setReleaseDate($_release_date);
            $this -> duration = $_duration;
            $this -> genres = $_genres;
            $this -> plot = $_plot;
        }

        public function setReleaseDate($date) {
            if (!is_numeric($date)) return false;

            $this -> release_date = $date;
        }

        public function getAbstract($limit = 80) {
            return substr($this -> plot, 0, $limit) . "...";
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

            <li>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $movie_2 -> name ?>
                        </h5>
                        <h6 class="card-subtitle mb-2">
                            Anno d'uscita:
                            <?= $movie_2 -> release_date ?>
                        </h6>
                        <h6 class="card-subtitle mb-2">
                            Durata:
                            <?= $movie_2 -> duration ?>
                            m
                        </h6>
                        <p class="card-text">
                            <?= $movie_2 -> getAbstract() ?>
                        </p>
                        <h6 class="card-subtitle mb-2">
                            Genere principale:
                            <ul class="ps-0">
                                <?php foreach($genres_1 ->genres as $genre) { ?>
                                <li class="text-muted ms-0 d-block">
                                    <?= $genre ?>
                                </li>
                                <?php } ?>
                            </ul>
                        </h6>
                    </div>
                </div>
            </li>
        </ul>
    </div>



</body>

</html>