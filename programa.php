<?php

    require 'classes/Conta.php';

    $minhaConta = new Conta();

    $minhaConta -> dono        = "Gean";
    $minhaConta -> numeroConta = "6840876";
    $minhaConta -> saldo       = 250.840;

    $minhaConta -> deposita(500);

    $conseguiSacar = $minhaConta -> saca(200);

    if ($conseguiSacar){
        echo "consegui sacar \n";
    }else{
        echo "saldo insufuciente para sacar \n";
    }

    echo "O cliente {$minhaConta -> dono} possui saldo de {$minhaConta -> saldo}";