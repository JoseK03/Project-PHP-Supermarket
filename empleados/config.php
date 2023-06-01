<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("../config/db.php");
require_once("../config/conectar.php");

class Config extends Conectar{

    private $empleado_id;
    private $nombre;
    private $celular;
    private $direccion;

    public function __construct($empleado_id = 0, $nombre = "", $celular = 0, $direccion = ""){
        $this->empleado_id = $empleado_id;
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->direccion = $direccion;
    }

    public function SetEmpleadoId($empleado_id){
        $this->empleado_id = $sempleado_id;
    }

    public function GetEmpleadoId(){
        return $this->empleado_id;
    }

    public function SetNombre($nombre){
        $this->nombre = $nombre;
    }

    public function GetNombre(){
        return $this->nombre = $nombre;
    }

    public function SetCelular($celular){
        $this->celular = $celular;
    }

    public function GetCelular(){
        return $this->celular;
    }

    public function SetDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function GetDireccion(){
        return $this->direccion;
    }

    public function InsertData 

    



}



?>
