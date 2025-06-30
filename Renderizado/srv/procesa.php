<?php

require_once __DIR__ . "/../lib/php/recuperaTexto.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

//$saludo = recuperaTexto("saludo");
$nombre = recuperaTexto("nombre");
switch ($nombre) {
    case "Roberto":
        $resultado = "¿Por qué el libro de matemáticas estaba triste? Porque tenía muchos problemas";
        break;
    case "Jack":
        $resultado = "¿Qué le dice un semáforo a otro semáforo? No me mires, que me estoy cambiando";
        break;
    case "Sebastian":
        $resultado = "¿Por qué el computador fue al doctor? Tenía un virus";
        break;
    case "Miguel":
        $resultado = "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!";
        break;
    case "Nery":
        $resultado = "¿Por qué la computadora fue a terapia? Tenía muchos bugs";
        break;
    case "Gonzalo":
        $resultado = "¿Qué dice un pez en el espejo? ¡Hola, pescao!";
        break;
    case "Edson":
        $resultado = "¿Por qué el gato se sentó en la computadora? Para ver el mouse";
        break;        
}

$resultado =
 "{$nombre}: {$resultado}.";
devuelveJson($resultado);
