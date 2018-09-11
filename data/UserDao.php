<?php

include 'Connection.php';
include '../entities/User.php';

class UserDao extends Connection {
  protected static $cnct;

  private static function getConnection(){
    self::$cnct = Connection::connect();
  }

  private static function disconnect(){
    self::$cnct = null;
  }

/**
* Method to validate the login
*
* @param    Object  $user
* @return   boolean
*/
  public static function login($user){
    $query = "SELECT
    id, name, user, email, privilege, date_record
    FROM users WHERE user = :user AND password = :password";

    self::getConnection();

    $resultado = self::$cnct->prepare($query);

    $resultado->bindValue(":user", $user->getUser());
    $resultado->bindValue(":password", $user->getPassword());

    $resultado->execute();

    if($resultado->rowCount() > 0){
      return "OK";
    }
    return "false";

  }

}

?>
