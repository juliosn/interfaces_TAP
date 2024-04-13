<?php

namespace App;

use App\Personagem;

class Arqueiro implements Personagem{

    public function Atacar($nome_Golpe, $pontos_Dano){

        $classe = 'Arqueiro';

        echo "
        \n --------------------------------------
        \n | Classe: $classe
        \n | Golpe: $nome_Golpe.
        \n | Dano causado (HP): $pontos_Dano.
        \n --------------------------------------
        ";

    }
    
}

?>