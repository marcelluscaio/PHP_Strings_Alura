<?php

$url = 'https://exemplo.com.br';

$isSafe =  str_starts_with($url, 'https');
$isBr =  str_ends_with($url, 'br');

if($isSafe){
   echo "$url is safe!";
} else {
   echo "$url is not safe, run for your life";
};

if($isBr){
   echo "hue";
}