<?php

class Connection {

  /**
  * Database connection
  * @return PDO
  */
  public static function connect(){
    try {
      $cn = new PDO("mysql:host=localhost; dbname=login-php", "username", "password");
      return $cn;
    } catch (PDOException $ex){
      die($ex -> getMessage());
    }
  }
}

Connection::connect();

?>
