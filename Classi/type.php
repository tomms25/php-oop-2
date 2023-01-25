<?php

class Type {

    public $name;

    public function __construct($name){
        
        $this->name = $name;

    }

}


$cibo = new Type ('Cibo');
$giocattolo = new Type ('Giocattolo');
$cuccia = new Type ('Cuccia');
$guinzaglio = new Type('Guinzaglio');
