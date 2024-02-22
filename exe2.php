<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos aula2 introdução ao PHP</title>
</head>

<body>
    <h1>Exercício de PHP - Operadores Matemáticos</h1>

    <h2>Adição (+)</h2>

    <?php
    $valor1 = 10;
    $valor2 = 5;
    $soma = $valor1 + $valor2;

    echo "Valor 1 = " . $valor1 . "<br/>";
    echo "Valor 2 = " . $valor2 . "<br/>";
    echo "Soma = " . $soma;
    ?>


    <h2>Subtração (-)</h2>

    <?php
    $valor1 = 20;
    $valor2 = 8;
    $subtracao = $valor1 - $valor2;

    echo "Valor 1 = " . $valor1 . "<br/>";
    echo "Valor 2 = " . $valor2 . "<br/>";
    echo "Resultado = " . $subtracao;
    ?>


    <h2>Multiplicação (*)</h2>

    <?php
    $valor1 = 6;
    $valor2 = 4;
    $multiplicacao = $valor1 * $valor2;

    echo "Valor 1 = " . $valor1 . "<br/>";
    echo "Valor 2 = " . $valor2 . "<br/>";
    echo "Resultado = " . $multiplicacao;
    ?>


    <h2>Divisõ (/)</h2>

    <?php
    $valor1 = 6;
    $valor2 = 4;
    $divisao = $valor1 / $valor2;

    echo "Valor 1 = " . $valor1 . "<br/>";
    echo "Valor 2 = " . $valor2 . "<br/>";
    echo "Resultado = " . $divisao;
    ?>


    <h2>Módulo (%)</h2>

    <?php
    $valor1 = 10;
    $valor2 = 3;
    $resto = $valor1 % $valor2;

    echo "Valor 1 = " . $valor1 . "<br/>";
    echo "Valor 2 = " . $valor2 . "<br/>";
    echo "Resultado = " . $resto;
    ?>


    <h2>Atribuição com Adição (+=)</h2>

    <?php
    $valor = 5;
    $valor += 3;

    echo "Valor após atribuição com adisão: " . $valor;
    ?>

    <h2>Atribuição com Subtração (-=)</h2>

    <?php
    $valor = 10;
    $valor -= 4;

    echo "Valor após atribuição com subtração: " . $valor;
    ?>

    <h2>Atribuição com Multiplicação (*=)</h2>

    <?php
    $valor = 7;
    $valor *= 2;

    echo "Valor após atribuição com Multiplicação: " . $valor;
    ?>


    <h2>Atribuição com Divisão (/=)</h2>

    <?php
    $valor = 24;
    $valor /= 3;

    echo "Valor após atribuição com divisão: " . $valor;
    ?>
    <h2>Outras funções matemáticas</h2>

    <?php
    print 'Valor de pi'."<br/>";   
    echo (pi()) ."<br/>";
    
    print 'menor número (8, 150, 30, 20, -8, -200)' ."<br/>";
    echo (min(8, 150, 30, 20, -8, -200))."<br/>";
    print 'maior número (8, 150, 30, 20, -8, -200)'."<br/>";
    echo (max(8, 150, 30, 20, -8, -200))."<br/>";

    print'Valor absoluta(positivo) de um número'."<br/>";
    echo (abs(-6.7))."<br/>"; # 'Valor absoluta(positivo) de um numero

    print "Retorna a raiz quadrada  do numero"."<br/>";
    echo (sqrt(25))."<br/>"; // Retorna a raiz quadrada  do numero

    print "faz o aredondamento do número"."<br/>";
    echo (round(0.68))."<br/>";/* aredndonda para 1 */
    echo (round(0.49))."<br/>"; // aredonda para 0

    print 'gera número aleatório'."<br/>";
    echo (rand())."<br/>"; // Para gerar um número aleatório

    print 'gera número aleatório em uma faixa definida, ex. de 10 a 100'."<br/>";
    echo (rand(10, 100))."<br/>"; // Para gerar um número aleatório em uma faixa definida

    ?>

</body>

</html>