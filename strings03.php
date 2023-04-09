<?php

$email = 'testedoteste@dominio.com';
$senha = 'SenhaForte123';

$atPosition = strpos($email, '@');

$emailName = substr($email, 0 , $atPosition).PHP_EOL;

$emailDomain = substr($email, $atPosition+1).PHP_EOL;

$passwordSize = strlen($senha);
//armazena em bytes. Caracteres com acentos ocupam dois bytes

echo $emailName;

echo $emailDomain;

if($passwordSize > 8){
   echo "Senha forte";
} else {
   echo "Senha fraca!";
}

$nomeCompleto = 'Caio Cabral';

explode(' ', $nomeCompleto);