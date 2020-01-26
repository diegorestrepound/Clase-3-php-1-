<?php
    require_once "Conversor.php";
    class Pesos extends Conversor{
        public function convertirDolares(){
            return($this->getMoneda() * 0.00030);
        }
    }
?>