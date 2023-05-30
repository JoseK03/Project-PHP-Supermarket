<?php

//ubicar error en el codigo, principalmente la zona

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("../db.php");

class Config{

    private $categoria_id;
    private $nombre;
    private $descripcion;
    

    protected $dbCnx;

    public function __construct($categoria_id = 0,$nombre= "",$descripcion=""){
        $this->categoria_id = $categoria_id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function SetCategoriaId($categoria_id){
        $this->categoria_id = $categoria_id;
    }

    public function GetCategoriaId(){
        return $this->categoria_id;
    }

    public function SetNombre($nombre){
        $this->nombre = $nombre;
    }

    public function GetNombre(){
        return $this->nombre;
    }

    public function SetDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function GetDescripcion(){
        return $this->descripcion;
    }

    public function InsertData(){
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO categorias(nombre,descripcion) values(?,?)");
            $stm->execute([$this->nombre, $this->descripcion]);
        } catch (Exception $e) {
            return $e->getMessage();            
        }
    }

    public function obtainAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM categorias");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();            
        }
    }

}

?>