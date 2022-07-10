<?php

class User{
    public string $username;
    public string $email;
    public int $sconto = 0;

    public function __construct(string $nome, string $mail){
        $this->username = $nome;
        $this->email = $mail;
    }
}