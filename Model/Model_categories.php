<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description for the user
 *
 */
require_once 'Model/connection.php';
class categories
{
    public $id_category;
    public $name_category;
    
    /**
     * 
     * @param type $pcategoria name of the categorie
     * @param type $pid_categoria is table code
     */   
    public function __construct($pname_category = "", $pid_category = 0)
    {
        $this->id_category = $pid_category;
        $this->name_category = $pname_category;
    }
    
    /**
     * Create the information in the database
     * @return type bool
     */    
    public function create_categ()
    {
        try {
            $sql = "INSERT INTO categories (id_category, name_category)"
                . "VALUES ('$this->id_category', '$this->name_category')";

            $pdo = new connection();
            $pdo = $pdo->connect();
            return $pdo->query($sql);
        } catch (PDOException $ex) {
            error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
        }

    }
    
    /**
     * Read the information from the products table in the database
     * @param type $id
     * @return \categories
     */ 
    public function read_categ($id = 0)
    {
        $rows = [];

        try {
            $sql = "SELECT * FROM categories";
            $pdo = new connection();
            $pdo = $pdo->connect();
            if ($id) {
                $sql .= " WHERE id_category='$id'";
            }
            $result = $pdo->query($sql);
            foreach ($result->fetchAll() as $value) {
                $rows [] = new categories($value['name_category'], $value['id_category']);
            }
        } catch (PDOException $ex) {
            error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
        }

        return $rows;
    }
    
    /**
     * Delete information from the products table in the database
     * @param type $id
     * @return type query
     */   
    public function delete_categ($id = 0)
    {
        $id_category = ($id) ? $id : $this->id_category;
        $sql = "DELETE FROM categories WHERE id_category = '$id_category'";
        echo $sql;
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }
    
    /**
     * Updates the information in the products table in the database
     * @return type query
     */
    public function update_categ()
    {
        $sql = "UPDATE categories SET id_category = '$this->id_category', name_category = '$this->name_category' WHERE id_category='$this->id_category'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }
    
    /**
     * Take the information of a specific insert
     * @param type $id_category
     * @return type NULL
     */
    public function get_attribute($id_category)
    {
        try {
            return $this->$id_category;
        } catch (Exception $ex) {
            return NULL;
        }
    }
}