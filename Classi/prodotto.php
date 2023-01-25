<?php

class Product {

    public $immagine;
    public $nome;
    public $prezzo;
    

    public function __construct ($immagine, $nome, $prezzo)
    {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this ->prezzo = $prezzo; 

    }







}