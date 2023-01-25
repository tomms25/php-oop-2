<?php

require_once __DIR__ . '/tyoe.php';

class Product {

    public $nome;
    public $prezzo;
    public $caratteristiche;
    

    public function __construct ($nome, $prezzo,$caratteristiche)
    {
        
        $this->nome = $nome;
        $this ->prezzo = $prezzo;
        $this->caratteristiche = $caratteristiche;

    }

}


$cibo_in_scatola = new Product ("Carnilove", "12.99", )