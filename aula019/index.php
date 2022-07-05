<?php

/**
 * Tipos de dados
 * Lógico: boolean
 * Texto: string
 * Inteiro: integer
 * Ponto flutuante: float
 * Array: array
 * Objeto: objects
 * Recurso: resource
 */

 $logico = false;
 $texto = "Ola mundo";
 $inteiro = 10;
 $ponto_flutuante = 0.6;
 $array = array($logico, $texto, $inteiro, $ponto_flutuante);

 echo 'Lógico: ' . gettype($logico);
 echo '<br>Texto: ' . gettype($texto);
 echo '<br>Inteiro: ' . gettype($inteiro);
 echo '<br>Ponto Flutuante: ' . gettype($ponto_flutuante);
 echo '<br>Array: ' . gettype($array);
