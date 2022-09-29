<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 1</title>
</head>
<body>
    <form action="" method="post" >
        Primeiro Numero: <input name="num1" type="text"><br>
        Segundo Numero: <input name="num2" type="text"><br>
        Terceiro Numero: <input name="num3" type="text"><br>
   
    </form> 
    <?php
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $c = $_POST['num3'];
        $soma = $a + $b + $c;

        if($a >10) {
            echo "<span style='color:blue;'>$soma</span>";
        }
        if($b < $c) {
            echo "<span style='color:green;'>$soma</span>";
        }
        if($c < $a & $c < $b) {
            echo "<span style='color:red;'>$soma</span>";
        }


    ?>       
    
</body>
</html>