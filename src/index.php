<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();

$padding = $climate->padding(20);

$padding->label('Somar Valores')->result('[1]');
$padding->label('Subtrair Valores')->result('[2]');
$padding->label('Sair')->result('[q]');

$climate->br();

$input = $climate->input('Selecione uma opção do MENU');

$input->accept([1, 2, 'q']);
$input->strict();

$response = $input->prompt();

switch($response) {
    case '1':
        $primeiroNumero = $climate->input('Primeiro valor:');
        $valorPrimeiroNumero =$primeiroNumero->prompt();

        $segundoNumero = $climate->input('Segundo valor:');
        $valorSegundoNumero = $segundoNumero->prompt();

        $soma = $valorPrimeiroNumero + $valorSegundoNumero;

        $climate->output(sprintf('Soma %s com %s é igual: %s ', $valorPrimeiroNumero, $valorSegundoNumero, $soma));
        break;

    case '2':
        $primeiroNumero = $climate->input('Primeiro valor:');
        $valorPrimeiroNumero =$primeiroNumero->prompt();

        $segundoNumero = $climate->input('Segundo valor:');
        $valorSegundoNumero = $segundoNumero->prompt();

        $subtrair = $valorPrimeiroNumero - $valorSegundoNumero;

        $climate->output(sprintf('Subtração de %s com %s é igual: %s ', $valorPrimeiroNumero, $valorSegundoNumero, $subtrair));
        break;

        default:
        $climate->out('Sistema encerrado.');
}

?>