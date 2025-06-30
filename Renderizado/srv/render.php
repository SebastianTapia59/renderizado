<?php

require_once __DIR__ . "/../lib/php/devuelveJson.php";
require_once __DIR__ . "/../lib/php/devuelveErrorInterno.php";

try {

 $lista = [
  [
   "nombre" => "Roberto",
   "chiste" => "¿Por qué el libro de matemáticas estaba triste? Porque tenía muchos problemas"
  ],
  [
   "nombre" => "Jack",
   "chiste" => "¿Qué le dice un semáforo a otro semáforo? No me mires, que me estoy cambiando"
  ],
  [
   "nombre" => "Sebastian",
   "chiste" => "¿Por qué el computador fue al doctor? Tenía un virus"
  ],
  [
   "nombre" => "Miguel",
   "chiste" => "¿Qué hace una abeja en el gimnasio? ¡Zum-ba!"
  ],
  [
   "nombre" => "Nery",
   "chiste" => "¿Por qué la computadora fue a terapia? Tenía muchos bugs"
  ],
  [
   "nombre" => "Gonzalo",
   "chiste" => "¿Qué dice un pez en el espejo? ¡Hola, pescao!"
  ],
  [
   "nombre" => "Edson",
   "chiste" => "¿Por qué el gato se sentó en la computadora? Para ver el mouse"
  ]
 ];

 // Genera el código HTML de la lista.
 $render = "";
 foreach ($lista as $modelo) {
  /* Codifica nombre y color para que cambie los caracteres
   * especiales y el texto no se pueda interpretar como HTML.
   * Esta técnica evita la inyección de código. */
  $nombre = htmlentities($modelo["nombre"]);
  $chiste = htmlentities($modelo["chiste"]);
  $render .=
   "<dt>{$nombre}</dt>
    <dd>{$chiste}</dd>";
 }

 devuelveJson(["lista" => ["innerHTML" => $render]]);
} catch (Throwable $error) {

 devuelveErrorInterno($error);
}
