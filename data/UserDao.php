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
    $query = "select * from users where user = :user and password = :password";

    self::getConnection();

    $result = self::$cnct->prepare($query);

    $result->bindValue(":user", $user->getUser());
    $result->bindValue(":password", $user->getPassword());

    $result->execute();

    if($result->rowCount() > 0){
      $rows = $result->fetch();
      if($rows["user"] == $user->getUser() && $rows["password"] == $user->getPassword()){
        return true;
      }
    }
    return false;

  }

}

?>
