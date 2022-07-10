<?php

class Giochi extends Product{
    public int $dimensione;
    public int $peso;
    public string $materiale;

    public function __construct(int $_dimensione, int $_peso, string $_materiale){
        $this->dimensione = $_dimensione;
        $this->peso = $_peso;
        $this->materiale = $_materiale;
    }
}