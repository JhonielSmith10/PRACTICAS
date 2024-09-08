<?php
function contar_palabras($texto){
return count(explode(" ", trim($texto)));
}
function contar_vocales($texto) {
    return preg_match_all('/[aeiouáéíóú]/i', $texto);
}
function invertir_palabras($texto) {
    return implode(" ", array_reverse(explode(" ", trim($texto))));
}