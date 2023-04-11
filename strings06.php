<?php
//"1997" = 'string numérica', é lido como 1997;
//"1997a" = 'string começando em número'. É lido como 1997 com um aviso;
//1 9 9 7 = É lido como 1
// 'a1997' == 0 -> Até o php8 qualquer string era convertida para 0,e  seria true. A partir do php 8 ele converte o 0 para string e compara 'a997' a '0';