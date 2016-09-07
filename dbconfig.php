<!--
@Author: Alain Demenet <ademenet>
@Date:   Sep 07 2016
@Email:  ademenet@student.42.fr
@Project: Camagru
@Last modified by:   ademenet
@Last modified time: Sep 07 2016
-->

<?php

// class permettant de creer la connexion avec la bdd
class Database
{
  private $dsn = 'mysql:dbname=camagru;host=localhost;port=8080';
  private $username = 'root';
  private $password = '123456';
  public  $db;

  public function dbConnection()
  {
    $this->db = null;
    try {
      $this->db = new PDO($dsn, $username, $password);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo "Échec lors de la connexion : " . $e->getMessage();
    }
    return $this->db;
  }

}
