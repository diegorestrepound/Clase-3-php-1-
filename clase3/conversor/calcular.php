<?php
    require_once "Dollar.php";
    require_once "Pesos.php";
    sleep(2);
    $objPesos = new Pesos();
    $objDollar = new Dollar();

    $moneda = $_POST["txtmoneda"];

    if(isset($_POST["btnpesos"])){
        $objPesos->setMoneda($moneda);
        print $objPesos->convertirDolares();
    }

    if(isset($_POST["btndollars"])){
        $objDollar->setMoneda($moneda);
        print $objDollar->convertirPesos();
    }
?>