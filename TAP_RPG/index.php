<?php

require 'vendor/autoload.php';

use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

$mago = new Mago();
$guerreiro = new Guerreiro();
$arqueiro = new Arqueiro();

$mago->Atacar("Rajada de energia", "150");
$guerreiro->Atacar("Corte Flamejante", "100");
$arqueiro->Atacar("Flecha Mágica", "125");

?>