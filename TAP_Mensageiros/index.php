<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\SMS;

$Whats = new Whatsapp();
$Sms = new SMS();
$Email = new Email();

$Whats->enviar("Mensagem enviada pelo:");
$Sms->enviar("Mensagem enviada pelo:");
$Email->enviar("Mensagem enviada pelo:");

?>