<?php

class Product{
    public string $categoria;
    public string $name;
    public int $price;
    public int $rate;

    public function __construct(string $nome, int $prezzo, int $voto){
        $this->name = $nome;
        $this->price = $prezzo;
        $this->rate = $voto;
    }
}