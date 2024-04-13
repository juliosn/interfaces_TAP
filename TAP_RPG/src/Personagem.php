<?php

namespace App;

interface Personagem {
    public function Atacar(
        $nome_Golpe, $pontos_Dano
    );
}

?>