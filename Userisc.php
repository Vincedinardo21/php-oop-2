<?php

class Userisc extends User{
    public string $data_iscrizione;

    public function setSale($sconto){
        $this->sconto = $sconto;
    }
}