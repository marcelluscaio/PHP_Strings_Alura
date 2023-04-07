<?php
$nome = 'Caio Cabral';

$isFamily = str_contains($nome, 'Cabral');

if($isFamily){
   echo "$nome is family";
} else {
   echo "$nome is not family";
};