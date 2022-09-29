<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 2</title>
</head>
<body>
    <form action="" method="post" >
        Informe um valor: <input name="numero" type="text"><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php 
        $valor = $_POST['numero'];
        $a = 2;
        $resto = $valor % $a;

        if($resto == 0) {
            echo"Valor divisível por 2";
        }else{
        echo "O valor não é divisível por 2";
        }
    ?>
</body>
</html>