<?php

require_once 'funcoes.php';

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

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 900);
$contasCorrentes['142.356.789-11'] = sacar($contasCorrentes['142.356.789-11'], 500);
$contasCorrentes['765.432.189-41'] = sacar($contasCorrentes['765.432.189-41'], 500);

unset($contasCorrentes['765.432.189-41']);

//titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("$cpf $titular $saldo");
}

?>