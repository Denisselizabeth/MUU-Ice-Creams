<?php

<<<<<<< HEAD
  class ice_creams 
  {
=======
  class ice_creams {
>>>>>>> origin/master

    public static $quantity;
    public static $allIceCreams;

<<<<<<< HEAD
    public static function getAllicecreams() {
=======
    public static function getAll() {
>>>>>>> origin/master

      //Me fijo si la lista había sido obtenida previamente, para no hacerlo de nuevo.
      if (!isset(self::$allIceCreams)) {

<<<<<<< HEAD
        //Me conecto a la base de data
        require_once("db_connection.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM muudb.ice_creams";
=======
        //Me conecto a la base de datos
        require_once("db_connection.php");

        //Ejecuto la lectura
        $CadenaDeBusqueda = "SELECT * FROM muu_db.ice_creams";
>>>>>>> origin/master
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        //Declaro el array de objetos ice_creams
        $HeladosADevolver=array();

        //INCOMPLETO
      }
    }
  }
?>
