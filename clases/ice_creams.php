<?php

  class ice_creams {

    public static $quantity;
    public static $allIceCreams;

    public static function getAll() {

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$allIceCreams)) {

        //Me conecto a la base de datos
        require_once("db_connection.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM muu_db.ice_creams";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos ice_creams
        $HeladosADevolver=array();

        //INCOMPLETO
      }
    }
  }
?>
