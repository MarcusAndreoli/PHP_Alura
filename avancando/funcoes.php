<?php

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
    echo $mensagem . '<br>';
}
function exibeConta(array $conta){
    ['titular'=> $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

//function titularComLetrasMaiusculas(array $conta){
//        $conta['titular'] = mb_strtoupper($conta['titular']);
//    }

?>