<?php
// Incluir el archivo con las funciones
include 'utilidades_texto.php';

// Definir el array con 3 frases
$frases = [
    "Hola mundo",
    "Repositorio creado exitosamente",
    "Crear archivos llamado utilidades que tengan tres funciones"
];

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<thead><tr><th>Frase</th><th>Número de Palabras</th><th>Número de Vocales</th><th>Frase Invertida</th></tr></thead>";
echo "<tbody>";

// Bucle para procesar cada frase
foreach ($frases as $frase) {
    // Llamamos a las funciones definidas en utilidades_texto.php
    $numeroPalabras = contar_palabras($frase);
    $numeroVocales = contar_vocales($frase);
    $fraseInvertida = invertir_palabras($frase);

    // Mostrar los resultados en la tabla
    echo "<tr>";
    echo "<td>$frase</td>";
    echo "<td>$numeroPalabras</td>";
    echo "<td>$numeroVocales</td>";
    echo "<td>$fraseInvertida</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>