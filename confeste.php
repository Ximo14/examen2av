<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Conferencia Oeste</title>
  </head>
  <body>
    <?php
    include 'dbNBA.php';

    $confeste= new dbNBA();
    if ($confeste->errorConexion()==false) {
      // echo "Funciona";
    }
     ?>

<!-- MENU -->
<h2><a href="index.php">Inicio</a></h2>
<h3><a href="#">Conferencia Oeste</a></h3>
<h3><a href="temporada.php">Temporada 99/00</a></h3><hr><br>
<!-- MENU -->

<table border=1>
<tr>
  <th> EQUIPO </th>
  <th> CIUDAD </th>
  <th> DIVISION</th>
</tr>

<?php
//Imprime todas las filas
// resultado1 coge el select que esta en la funcion mostrarConfEste
$resultado1=$confeste->mostrarConfEste();
while($fila1=$resultado1->fetch_assoc()) {

  echo "<tr>";
  echo"<td> ".$fila1['Nombre']." </td>";
  echo"<td> ".$fila1['Ciudad']." </td>";
  echo"<td> ".$fila1['Division']." </td>";
  echo "</tr>";
}
  ?>

  </body>
</html>
