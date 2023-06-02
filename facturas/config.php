<?php

require_once("../config/conectar.php");
require_once("../config/db.php");

class Confing extends Conectar{
    private $factura_id;
    private $empleado_id;
    private $cliente_id;
    private $date;

    public function __construct($factura_id = 0, $empleado_id = 0, $cliente_id = 0, $date = "", $dbCnx=""){
        $this->factura_id = $factura_id;
        $this->empleado_id = $empleado_id;
        $this->cliente_id = $cliente_id;
        $this->date = $date;

        parent:: __construct($dbCnx);
    }

    public function SetFacturaId($factura_id){
        $this->factura_id = $factura_id;
    }

    public function GetFacturaId(){
        return $this->factura_id;
    }

    public function SetEmpleadoId($empleado_id){
        $this->empleado_id = $empleado_id;
    }

    public function GetEmpleadoId(){
        return $this->empleado_id;
    }

    
}




?>