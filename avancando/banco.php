<?php

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;

}

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

$contasCorrentes['142.356.789-11'] = sacar($contasCorrentes['142.356.789-11'], 500);
$contasCorrentes['765.432.189-41'] = sacar($contasCorrentes['765.432.189-41'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

?>