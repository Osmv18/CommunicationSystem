<?php
require_once 'Model/Config.php';

class connection {
    private $std;

    public function __construct() {​​
        $this->std ="mysql:dbname=".DB_NAME.";charset=utf8";
    }​​
    public function connect(){​​
        try{
            ​​return new PDO($this->std,DB_USER,
            DB_PASSWORD);
        }​​ 
        catch (PDOException $ex){
            ​​echo("Error en la funcion ". __FUNCTION__." del archivo ".__FILE__." el error es: ".
            $ex->getMessage());
        }​​
        return null;
    }​​

}