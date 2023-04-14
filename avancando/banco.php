<?php

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;

}

$contasCorrentes = [
    //$cpf => $conta
    '123.456.789-10' => [
        'titular' => "Marcus",
        'saldo' => 1000
    ],
    '142.356.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '765.432.189-41' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

if (500 > $contasCorrentes['142.356.789-11']['saldo']){
    exibeMensagem("Você não pode sacar este valor");
} else{
    $contasCorrentes['142.356.789-11']['saldo'] -= 500;
}

if (500 > $contasCorrentes['765.432.189-41']['saldo']){
    exibeMensagem("Você não pode sacar este valor");
} else{
    $contasCorrentes['765.432.189-41']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

?>