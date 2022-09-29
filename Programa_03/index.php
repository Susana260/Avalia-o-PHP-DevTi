<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 3</title>
</head>
<body>
    <form method="post">
        <div>
            <h1> Informe o valor por Kg de:</h1>
            Valor Maçã:
            <input type="text" name="valor_1"> <br>
            Valor Melancia:
            <input type="text" name="valor_2"> <br>
            Valor Laranja:
            <input type="text" name="valor_3"> <br>
            Valor Repolho:
            <input type="text" name="valor_4"> <br>
            Valor Cenoura:
            <input type="text" name="valor_5"> <br>
            Valor Batata:
            <input type="text" name="valor_6"> <br>
        </div>
        <div>
            <h1>Informe o peso em KG de:</h1>
            Maçã:
            <input type="text" name="peso_1"> <br>
            Melancia:
            <input type="text" name="peso_2"> <br>
            Laranja:
            <input type="text" name="peso_3"> <br>
            Repolho:
            <input type="text" name="peso_4"> <br>
            Cenoura:
            <input type="text" name="peso_5"> <br>
            Batata:
            <input type="text" name="peso_6"> <br>
        </div>

        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>

<?php
    if(isset($_POST['enviar']))
    {
        $saldo_inicial = 50.00;
        $valor_maca = $_POST['valor_1'] * $_POST['peso_1'];
        $valor_melancia = $_POST['valor_2'] * $_POST['peso_2'];
        $valor_laranja = $_POST['valor_3'] * $_POST['peso_3'];
        $valor_repolho = $_POST['valor_4'] * $_POST['peso_4'];
        $valor_cenoura = $_POST['valor_5'] * $_POST['peso_5'];
        $valor_batata = $_POST['valor_6'] * $_POST['peso_6'];
        $resultado = $valor_maca + $valor_melancia + $valor_laranja + $valor_repolho + $valor_cenoura + $valor_batata;

        echo "Valor da compra: R$ $resultado <br>" ;
    
        if($saldo_inicial > $resultado) {
            $res = $saldo_inicial - $resultado;
            echo "<span style='color:blue;'> Sobrou R$ $res";
        } 
        else if($saldo_inicial == $resultado) {
            echo "<span style='color:green;'> Sem saldo restante.";
        } 
        else if($saldo_inicial < $resultado) {
            $res = $resultado - $saldo_inicial;
            echo "<span style='color:red;'>Faltou $res reais";
        }
    }
    ?>
</body>
</html>