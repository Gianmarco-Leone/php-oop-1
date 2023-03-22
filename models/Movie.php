<?php

// Importo file classe Genre
require_once __DIR__ . "/Genre.php";

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

    // Funzione che controlla che la data sia un numero
    public function setReleaseDate($date) {
        if (!is_numeric($date)) return false;

        $this -> release_date = $date;
    }

    // Funzione che ritorna una stringa più corta rispetto alla stringa "plot" dell'istanza a seconda del limite di caratteri passato come parametro(80 di default)
    public function getAbstract($limit = 80) {
        return substr($this -> plot, 0, $limit) . "...";
    }
}

?>