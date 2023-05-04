<?php

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

function sacar(array $conta, float $valorASacar) : array{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array{
    if ($valorADepositar > 0){
    $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem): void{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);
$contasCorrentes['142.356.789-11'] = sacar($contasCorrentes['142.356.789-11'], 500);
$contasCorrentes['765.432.189-41'] = sacar($contasCorrentes['765.432.189-41'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}

?>