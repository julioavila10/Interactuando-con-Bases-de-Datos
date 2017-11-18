<?php
  class ConectorBD
  {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $conexion;

    function initConexion($nombre_db){
      $this->conexion = new mysqli($this->host, $this->user, $this->password, $nombre_db);
      if ($this->conexion->connect_error) {
        return "Error:" . $this->conexion->connect_error;
      }else {
        return "OK";
      }
    }


    function ejecutarQuery($query){
      return $this->conexion->query($query);
    }

    function cerrarConexion(){
      $this->conexion->close();
    }
    
    //Porque conexion es private... getConexion retorna el objeto
    function getConexion(){
      return $this->conexion;
    }


  }





 ?>
