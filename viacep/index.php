<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCEP;

if (!isset($argv[1])){
    die("CEP não definido\n");
}

$dadosCEP = ViaCEP::consultarCEP($argv[1]);

print_r($dadosCEP);