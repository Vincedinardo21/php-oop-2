<?php

class User{
    public $username;
    public $email;
    public $sconto = 0;

    public function __construct(string $nome, string $mail){
        $this->username = $nome;
        $this->email = $mail;
    }
}