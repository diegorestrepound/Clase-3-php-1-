<?php
    class Dividir extends Matematicas{
        public function dividir(){
            if ($this->getNum1() && $this->getNum2() > 0 ) {
                return ($this->getNum1() / $this->getNum2());
            }
        }
    }

    
?>