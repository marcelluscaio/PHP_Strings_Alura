<?php

$email = 'testedoteste@dominio.com';

$atPosition = strpos($email, '@');

//Da 0 até a oitava posicao
$emailName = substr($email, 0 , $atPosition).PHP_EOL;

//da 9 ate o final
$emailDomain = substr($email, $atPosition+1);

echo $emailName;

echo $emailDomain;