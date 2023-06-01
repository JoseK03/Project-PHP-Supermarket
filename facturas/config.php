<?php

require_once("../config/conectar.php");
require_once("../config/db.php");

class Confing extends Conectar{
    private $factura_id;
    private $empleado_id;
    private $cliente_id;
    private $date;

    public function __construct($factura_id = 0, $empleado_id = 0, $cliente_id = 0, $date = ""){
        $this->factura_id = $factura_id;
        $this->empleado_id = $empleado_id;
        $this->cliente_id = $cliente_id;
        $this->date = $date;

        
    }
}




?>