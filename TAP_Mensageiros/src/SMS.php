<?php

namespace App;

use App\Mensageiro;

class SMS implements Mensageiro{
    protected $mensagem;

    public function enviar($mensagem) {
        if($mensagem)
        {
            echo "\n $mensagem SMS \n";
        }
    }
}

?>