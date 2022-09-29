<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa 4</title>
</head>
<body>
    <form action="" method="post">
        <h3>Valor a vista: R$ 8.654,00</h3>
        Calcular juros para:
        <br>

        <label for="juros1">24 Vezes</label>
        <input type="submit" id="juros1" name="juros1" value="calcular" />
        <br>

        <label for="juros2">36 Vezes</label>
        <input type="submit" name="juros2" value="calcular" />
        <br>

        <label for="juros3">48 Vezes</label>
        <input type="submit" name="juros3" value="calcular" />
        <br>

        <label for="juros4">60 Vezes</label>
        <input type="submit" name="juros4" value="calcular" />
    </form>

    <?php
        $capital = 8654;
        $juros1 = $_POST['juros1'];
        $juros2 = $_POST['juros2'];
        $juros3 = $_POST['juros3'];
        $juros4 = $_POST['juros4'];

        if($juros1) {
            $juros = $capital*(1.5/100)*(24);

            print ("Valor das parcelas: R$ $juros");
        } 
        else if ($juros2) {
            $juros = $capital*(2/100)*(36);

            print ("Valor das parcelas: R$ $juros");
        } 
        else if($juros3) {
            $juros = $capital*((2.5/100))*(48);

            print ("Valor das parcelas: R$ $juros");
        }
        else if($juros4) {
            $juros = $capital*(3/100)*(60);

            print ("Valor das parcelas: R$ $juros");
        }
    ?>
</body>
</html>