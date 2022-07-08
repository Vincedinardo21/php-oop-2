<?php 

class Food extends Product {
    private string $energy;

   public function getEnergy(){
        return $this->energy;
   }

   public function setEnergy($energy){
       $this->energy = $energy;
       return $this;
   }
}