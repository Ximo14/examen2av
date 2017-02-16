<?php
/**
 * XIMO GIL NBA
 */
class dbNBA
{
  // Atributos para realizar la conexion
  private $conexion;
  private $error=false;

  // CONEXION
  function __construct()
  {
    $this->conexion = new mysqli("localhost","root","","nba");
    if ($this->conexion->connect_errno) {
      $this->error=true;
    }

    }

    public function errorConexion()
    {
      return $this->error;
    }
    // FIN CONEXION

    // FUNCION mostrarEquipos
    public function mostrarEquipos()
    {
      if ($this->conexion->connect_errno){
          $this->error=true;
      }else{
        return $this->conexion->query("SELECT Nombre,Ciudad,Conferencia,Division FROM equipos");
      }
    }

    // FUNCION mostrarConfEste
    public function mostrarConfEste()
    {
      if ($this->conexion->connect_errno){
          $this->error=true;
      }else{
        return $this->conexion->query("SELECT Nombre,Ciudad,Division FROM equipos WHERE Conferencia='East'");
      }
    }

    // FUNCION mostrarTemporada
    public function mostrarTemporada($temporada)
    {
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }else{
      return $this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante,temporada FROM partidos WHERE temporada='".$temporada."'");
      }
    }

}
 ?>
