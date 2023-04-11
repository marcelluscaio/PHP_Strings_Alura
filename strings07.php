<?php

$telefones = ['(24) 98765 - 3546', '(22) 666-666'];

foreach($telefones as $telefone){
   $telefoneValido = preg_match("/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/", $telefone);

   if($telefoneValido){
      echo "Telefone válido".PHP_EOL;
   } else{
      echo "Telefone inválido".PHP_EOL;
   }
}


