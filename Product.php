<?php

class Product{
    private string $name;
    private int $price;

    public function __construct(string $nome, int $prezzo){
        $this->name = $nome;
        $this->price = $prezzo;
    }
}