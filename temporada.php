<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PARTIDOS TEMPORADA</title>
  </head>
  <body>
    <?php
    include 'dbNBA.php';

    $temporada= new dbNBA();
    if ($temporada->errorConexion()==false) {
      // echo "Funciona";
    }
     ?>
<!-- MENU -->
<h2><a href="index.php">Inicio</a></h2>
<h3><a href="confeste.php">Conferencia Este</a></h3>
<h3><a href="#">Conferencia Oeste</a></h3><hr><br>
<!-- MENU -->

<table border=1>
<tr>
  <th> EQUIPO LOCAL</th>
  <th> EQUIPO VISITANTE </th>
  <th> PUNTOS LOCAL </th>
  <th> PUNTOS VISITANTE</th>
</tr>

<?php
//Imprime todas las filas
// resultado1 coge el select que esta en la funcion mostrarTemporada
$resultado1=$temporada->mostrarTemporada('99/00');
while($fila1=$resultado1->fetch_assoc()) {

  echo "<tr>";
  echo"<td> ".$fila1['equipo_local']." </td>";
  echo"<td> ".$fila1['puntos_local']." </td>";
  echo"<td> ".$fila1['equipo_visitante']." </td>";
  echo"<td> ".$fila1['puntos_visitante']." </td>";
  echo "</tr>";
}
  ?>

  </body>
</html>
