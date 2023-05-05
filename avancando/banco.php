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
$contasCorrentes['765.432.189-41'] = sacar($contasCorrentes['765.432.189-41'], 300);

unset($contasCorrentes['765.432.189-41']);

//titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?= $conta['titular']; ?> - <?= $cpf; ?> </h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>