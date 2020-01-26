<?php
    require_once "Sumar.php";
    require_once "Restar.php";
    require_once "Multiplicar.php";
    require_once "Dividir.php";
    sleep(2);
    $objSuma = new Sumar();
    $objResta = new Restar();
    $objMultiplicar = new Multiplicar();
    $objDividir = new Dividir();
    
  
    

    $num1 = $_POST["txtnumero1"];
    $num2 = $_POST["txtnumero2"];

    if(isset($_POST["btnsumar"])){
        $objSuma->setNum1($num1);
        $objSuma->setNum2($num2);
        print $objSuma->sumar();
    }
    if(isset($_POST["btnrestar"])){
        $objResta->setNum1($num1);
        $objResta->setNum2($num2);
        print $objResta->restar();
    }
    if(isset($_POST["btnmultiplicar"])){
        $objMultiplicar->setNum1($num1);
        $objMultiplicar->setNum2($num2);
        print $objMultiplicar->multiplicar();
    }
    if(isset($_POST["btndividir"])){
        $objDividir->setNum1($num1);
        $objDividir->setNum2($num2);
        print $objDividir->dividir();
    }

?>