<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';
require_once 'src\Endereco.php';

$endereco = new Endereco('São Paulo','São Paulo', 'Morro Grande','RuaPhpIsVeryInteresante','189');

$raphael  = new Titular(new CPF('123.456.7 89-10'), 'Raphael França Simonetti', $endereco);
$primeiraConta = new Conta($raphael);

$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaEndTitular() ;

echo Conta::recuperaNumeroDeContas();
