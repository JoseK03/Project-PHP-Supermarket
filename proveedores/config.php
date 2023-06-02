<?php

require_once("../config/conectar.php");
require_once("../config/db.php");

class Config extends Conectar{

    private $proveedor_id;
    private $nombre;
    private $telefono;
    private $ciudad;

    public function __construct($proveedor_id = 0, $nombre = "", $telefono = "", $ciudad= "", $dbCnx = ""){
        $this->proveedor_id = $proveedor_id;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->ciudad = $ciudad;

        parent:: __construct($dbCnx);
    }

    public function SetProovedorId($proveedor_id){
        $this->proveedor_id = $proveedor_id;
    }

    public function GetProovedorId(){
        return $this->proveedor_id;
    }

    public function SetNombre($nombre){
        $this->nombre = $nombre;
    }

    public function GetNombre(){
        return $this->nombre;
    }

    public function SetTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function GetTelefono(){
        return $this->telefono;
    }

    public function SetCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function GetCiudad(){
        return $this->ciudad;
    }



    public function InsertData(){
        try {
            $stm = $this->$dbCnx->prepare("SELECT INTO proveedores(nombre,telefono,ciudad) values(?,?,?)");
            $stm->execute([$this->nombre, $this->celular, $this->ciudad]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function ObtainAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM  proveedores");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

?>