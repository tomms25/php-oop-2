<?php

class Category {


    public $animal;

    public function __construct ($animal){

        $this->animal = $animal;

    }


}

$cat = new Category ("Gatto");
$dog = new Category("Cane");

var_dump($cat, $dog);