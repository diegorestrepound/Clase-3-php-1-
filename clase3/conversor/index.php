<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Conversor de moneda</title>
    <script>
        function proceso(txtmoneda, boton){
            switch(boton){
                case "Calcular pesos":
                    var parametros = {
                        "txtmoneda" : txtmoneda,
                        "btnpesos" : boton
                    };
                break;

                case "Calcular dolares":
                    var parametros = {
                        "txtmoneda" : txtmoneda,
                        "btndollars" : boton
                    };
                break;
            }   

            $.ajax({
                data : parametros,
                url : 'calcular.php',
                type : 'post',
                beforeSend:
                    function(){
                        $('#resultado').html("Cargando!...");
                    },
                success:
                function(response){
                    $('#resultado').html(response);
                }    

            });
        }
    </script>
</head>
<body>
    <form name="form1" method="POST">
        Peso: <input type="text" name="txtmoneda" id="txtmoneda">
        <br>
        
        <input type="button" name="bntpesos" id="btnpesos" value="Calcular pesos"
        onclick="proceso($('#txtpesos').val(), $('#btnpesos').val()  );" >

        <input type="button" name="bntdollars" id="btndollars" value="Calcular dolares"
        onclick="proceso($('#txtdollars').val(), $('#btndollars').val()  );" >

    </form>
    <br>
    <span id="resultado"> </span>

    <script src="jquery-3.4.1.js"></script>
</body>
</html>