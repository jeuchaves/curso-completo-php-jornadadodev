<?php

$num1 = 7;
$num2 = 3;
$modulo = 7 % 3;

echo $num1 . ' % ' . $num2 . ' = ' . $modulo;

$num1 = 7;
$num2 = 3.3;
$modulo = fmod($num1, $num2); # Módulo com pontos flutuantes

echo '<br>' . $num1 . ' % ' . $num2 . ' = ' . $modulo;