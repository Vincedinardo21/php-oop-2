<?php 

class Food extends Product {
    public int $energy = 25;

    
    public function getEnergy(){
        return $this->energy;
    }

    public function setEnergy($energy){
       $this->energy = $energy;
       return $this;
    }
}