<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos aula2 introdução ao PHP</title>
</head>

<body>
    <h1>Constantes do PHP</h1>
    <?php 
    define("AMM", "Antonio Marcos Mello");
    echo AMM ."<br>";

    define ( "FMP", "Faculdade Municipal de Palhoça");
    echo FMP ."<br>";

    define("APP_NAME", "Minha Aplicação");
    define("pi", 3.14159);
    echo pi ."<br>"; 
    echo APP_NAME ."<br>";
    ?>
</body>

</html>