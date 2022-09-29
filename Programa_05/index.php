<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 5</title>
</head>
<body>
    <h1>Valor inicial: 8654</h1>
    <form method="post">
        vezes:<select name="vezes">
            <option value="24">24 vezes</option>
            <option value="36">36 vezes</option>
            <option value="48">48 vezes</option>
            <option value="60">60 vezes</option>
        </select>
        <input type="submit" name="enviar">
    </form>

    <?php
        if(isset($_POST['enviar'])){

            $valor=($_POST['vezes']/12)-2;

            $valor=($valor*0.3)+2;

            $valor=($valor/100)+1;

            echo "<hr>vezes:".$_POST['vezes']."--".$valor."<br>";
            $k=8654;

            $ri=pow($valor,$_POST['vezes']);

            $tax=$k*$ri;

            $par=$tax/$_POST['vezes'];

            echo "cada parcela vale ".$par." reais";

        }
    ?>
</body>
</html>


