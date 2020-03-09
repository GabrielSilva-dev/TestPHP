<?php

$idade = 17;

echo "Você só pode entrar se tiver mais que 18 anos". PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos.". PHP_EOL;
    echo "Pode entrar". PHP_EOL;
}else{
    echo "Você não pode entrar, pois tem apenas $idade anos.". PHP_EOL;
}