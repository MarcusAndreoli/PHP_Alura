<?php

$contasCorrentes = [
    //$cpf => $conta
    12345678910 => [
        'titular' => "Marcus",
        'saldo' => 1000
    ],
    14235678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    76543218941 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    //echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
}

?>