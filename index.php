<?php
/*
 * LABORATORIO #9 · Estructuras de control en PHP
 * Sigue el documento del estudiante. Escribe tu código SOLO en las zonas marcadas con TODO.
 * Recuerda: un commit por ejercicio (ej0, ej1, ... css, final).
 */

// ---------- PARTE 0 · TUS DATOS ----------
<?php
// ---------- PARTE 0 · TUS DATOS ----------
const SEMILLA = 155;
const NOMBRE = "Fransisco";
const APELLIDO = "Quiñones";

$nombreCompleto = NOMBRE . " " . APELLIDO;
$edad = 8 + (SEMILLA % 70);
$dia = (SEMILLA % 7) + 1;
$mes = (SEMILLA % 12) + 1;
$nota1 = 40 + (SEMILLA % 61);
$nota2 = 40 + ((SEMILLA * 3) % 61);
$nota3 = 40 + ((SEMILLA * 7) % 61);
$monto = 20 + (SEMILLA % 181);
$esMiembro = (SEMILLA % 2) == 0;
$hora = SEMILLA % 24;
$huella = (SEMILLA * 13 + 91) % 1000;
$descuento = SEMILLA * 0.001;
$vacio = null;

// ---------- EJERCICIO 1 · BOLETO DE CINE ----------
const PRECIO_NINO = 3.00;
const PRECIO_JOVEN = 4.50;
const PRECIO_ADULTO = 7.00;
const PRECIO_JUBILADO = 3.50;

if ($edad < 12) {
    $categoria = "Niño";
    $precio = PRECIO_NINO;
} elseif ($edad < 18) {
    $categoria = "Joven";
    $precio = PRECIO_JOVEN;
} elseif ($edad < 60) {
    $categoria = "Adulto";
    $precio = PRECIO_ADULTO;
} else {
    $categoria = "Jubilado";
    $precio = PRECIO_JUBILADO;
}

$miercoles = "No";
if ($dia == 3) {
    $precio = $precio * 0.5;
    $miercoles = "Sí";
}
?>
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="lab9-huella" content="<?= $huella ?>">
  <!-- TODO 0.3: <meta name="lab9-huella" content="..."> con el valor de $huella -->
  <title>Lab 9 · Estructuras de control</title>
  <!-- TODO CSS-1: enlaza css/estilos.css (CSS externo) -->
  <!-- TODO CSS-2: agrega un <style> interno con al menos 2 reglas -->
</head>
<body>
  <header>
    <!-- TODO CSS-3: agrega un atributo style (CSS en línea) a este h1 -->
    <h1>Laboratorio #9 · Estructuras de control</h1>
    <p id="autor">Autor: <?= fransisco . " " . quinones ?></p>
  </header>

  <!-- TODO 0.5: el id de <main> es "lab9-" + tu apellido en minúsculas, sin tildes (ver documento) -->
  <main id="lab9-quinones">

    <section id="ej0">
      <h2>Ejercicio 0 · Tipos de datos</h2>
      <table id="ej0-tipos">
        <thead>
          <tr><th>Variable</th><th>Tipo</th></tr>
        </thead>
        <tbody>
          <tr><td>$nombreCompleto</td><td><?= gettype($nombreCompleto) ?></td></tr>
<tr><td>$edad</td><td><?= gettype($edad) ?></td></tr>
<tr><td>$esMiembro</td><td><?= gettype($esMiembro) ?></td></tr>
<tr><td>$descuento</td><td><?= gettype($descuento) ?></td></tr>
<tr><td>$vacio</td><td><?= gettype($vacio) ?></td></tr>
        </tbody>
      </table>
    </section>

    <section id="ej1">
      <h2>Ejercicio 1 · Boleto de cine</h2>
      <p id="ej1-res"><!-- TODO 1 --></p>
    </section>

    <section id="ej2">
      <h2>Ejercicio 2 · Notas</h2>
      <!-- TODO CSS-4: agrega la clase "ok" o "error" con PHP según el estado -->
      <p id="ej2-res" class="resultado"><!-- TODO 2 --></p>
    </section>

    <section id="ej3">
      <h2>Ejercicio 3 · Día de la semana</h2>
      <p id="ej3-res"><!-- TODO 3 --></p>
    </section>

    <section id="ej4">
      <h2>Ejercicio 4 · Mes y estación</h2>
      <p id="ej4-res"><!-- TODO 4 --></p>
    </section>

    <section id="ej5">
      <h2>Ejercicio 5 · Caja de la tienda</h2>
      <p id="ej5-monto"><!-- TODO 5 --></p>
      <p id="ej5-descuento"><!-- TODO 5 --></p>
      <p id="ej5-recargo"><!-- TODO 5 --></p>
      <p id="ej5-total"><!-- TODO 5 --></p>
    </section>

  </main>

  <footer id="firma">Lab 9 · <?= NOMBRE . " " . APELLIDO ?> · Semilla <?= SEMILLA ?></footer>
</body>
</html>