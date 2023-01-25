<?php

class Giocattoli extends Product {

    public $dimensioni;
    public $caratteristiche;


    public function __construct ($dimensioni, $caratteristiche) {

        $this->dimensioni = $dimensioni;
        $this->caratteristiche = $caratteristiche;

        parent::__construct($immagine, $nome, $prezzo);

    }

}