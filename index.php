<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página Principal</title>
  </head>
  <body>
    <?php
    // Conexion
    include 'dbNBA.php';

    $nba = new dbNBA();
    if ($nba->errorConexion()==false) {
      // echo "Funciona";
  }
     ?>
<!-- MENU -->
<h3><a href="#">Conferencia Oeste</a></h3>
<h3><a href="confeste.php">Conferencia Este</a></h3>
<h3><a href="temporada.php">Temporada 99/00</a></h3><hr><br>
<!-- MENU -->

<table border=1>
<tr>
  <th> EQUIPO </th>
  <th> CIUDAD </th>
  <th> CONFERENCIA </th>
  <th> DIVISION</th>
</tr>

<?php
//Imprime todas las filas
// resultado1 coge el select que esta en la funcion mostrarEquipos
$resultado1=$nba->mostrarEquipos();
while($fila1=$resultado1->fetch_assoc()) {

  echo "<tr>";
  echo"<td> ".$fila1['Nombre']." </td>";
  echo"<td> ".$fila1['Ciudad']." </td>";
  echo"<td> ".$fila1['Conferencia']." </td>";
  echo"<td> ".$fila1['Division']." </td>";
  echo "</tr>";
}
  ?>

  </body>
</html>
