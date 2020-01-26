<?php
    require_once "conversor.php";
    class Dollar extends Conversor{
        public function convertirPesos(){
            return($this->getMoneda() * 3365.07);
        }
    }
?>