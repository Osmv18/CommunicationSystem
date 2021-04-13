<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include "Model/connection.php";

class publications {

  private $id_publication;
  public $title;
  public $fecha;
  public $multimedia;
  public $fk_id_category;
  public $description;
  public $fk_id_admin;

  /**
   * method construct publications
   * @param string $ptitle title of publication
   * @param date $pfecha date of publication
   * @param ## $pmultimedia 
   * @param int $pfk_id_category pass the fk to the publications table
   * @param string $pdescription description of publication
   * @param int $pfk_id_admin pass the fk to the publication table
   * @param int $pid_publication id table code
   */
  public function __construct($ptitle = "", $pfecha = "", $pmultimedia = "", $pfk_id_category = "", $pdescription = "", $pfk_id_admin = "", $pid_publication = 0) {
    $this->id_publication = $pid_publication;
    $this->title = $ptitle;
    $this->fecha = $pfecha;
    $this->multimedia = $pmultimedia;
    $this->fk_id_category = $pfk_id_category;
    $this->description = $pdescription;
    $this->fk_id_admin = $pfk_id_admin;
  }

  /**
   * create the information in the database 
   * @return bool
   */
  public function create() {
    try {
      $sql = "INSERT INTO publications (title, fecha, multimedia, fk_id_category, description, fk_id_admin) 
            VALUES ('$this->title', '$this->fecha', '$this->multimedia', '$this->fk_id_category', '$this->description', '$this->fk_id_admin')";
      print_r($sql);
      $pdo = new connection();
      $pdo = $pdo->connect();
      return $pdo->query($sql);
    } catch (PDOException $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }

    return false;
  }

  /**
   * Read the information from the publications table in the database
   * @param Int $id_publication
   * @return /publications
   */
  public function read($id_publication = 0) {
    $rows = [];
    try {
      $sql = "SELECT * FROM publications";
      $pdo = new connection();
      $pdo = $pdo->connect();

      if ($id_publication) {
        $sql .= " WHERE id_publication=" . $id_publication;
      }
      $result = $pdo->query($sql);
      foreach ($result->fetchAll() as $value) {
        $rows [] = new publications($value['title'], $value['fecha'], $value['multimedia'], $value['fk_id_category'], $value['description'], $value['fk_id_admin'], $value['id_product']);
      }
    } catch (PDOException $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }

    return $rows;
  }

  /**
   * delate information from the publication table in the database
   * @param int $id
   * @return pdo query
   */
  public function delete($id = 0) {
    $id_publication = ($id) ? $id : $this->id_publication;
    $sql = "DELATE FROM publications WHERE id_publication = '$id_publication'";
    $pdo = new connection();
    $pdo = $pdo->connect();
    return $pdo->query($sql);
  }

  /**
   * update the information in the publication table in the database
   * @return pdo query
   */
  public function update() {
    $sql = "UPDATE publications SET title = '$this->title', fecha = '$this->fecha', multimedia = '$this->multimedia',"
            . " fk_id_category='$this->fk_id_category', description='$this->description', fk_id_admin='$this->fk_id_admin' WHERE id_publication='$this->id_publication'";
    $pdo = new connection();
    $pdo = $pdo->connect();
    return $pdo->query($sql);
  }

  public function get_attribute($id_publication) {
    try {
      return $this->$id_publication;
    } catch (Exception $ex) {
      return NULL;
    }
  }

}
