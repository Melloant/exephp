<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos aula2 introdução a PHP</title>
</head>

<body>
    <h1>Primeiro exercício de PHP</h1>
    <?php
    $idade = 25;
    $nome = "Antonio";

    echo "Idade:" . $idade . "<br>";
    print "Nome:" . $nome;
    ?>

    <h1>Segundo exercício de PHP</h1>
    <?php
    $idade = 30;
    $peso = 70.5;

    echo "Idade:" . $idade . "<br>";
    print "Peso:" . $peso;
    ?>

    <h1>Terceiro exercício de PHP</h1>
    <?php

    $nome = "Antonio";
    $sobrenome = "Mello";

    echo "Nome: " . $nome . "<br>";
    echo "Sobrenome: " . $sobrenome;

    ?>

    <h1>Exercício de PHP - Variavel Booleana</h1>
    <?php

$tenConta = true;
$posuiCartao= false;

 echo "Tem Conta? " . ($tenConta ? "Sim" : "Não"). "<br>";
echo "posuiCartao " . ($posuiCartao ? "Sim" : "Não");

?>

    <h1>Operador Tenário</h1>

    <?php
    $idade = 18;
    $status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

    echo $status;
    
    ?>

    <h1>Exercício de PHP - Variável Array</h1>
    <?php
$cores = array("vermelho" , "verde" , "azul");
$numeros = [1, 2, 3, 4, 5];

$posicao = 0;

echo "posição" . $posicao . "<br/>";
echo "Cor na posição " . $posicao . ": " . $cores[$posicao];

?>


</body>

</html>