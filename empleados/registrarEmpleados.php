<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if(isset($_POST['empleados'])){

    require_once("config.php");

    $config = new Config();

    $config->SetNombre(['nombre']);
    $config->SetCelular(['celular']);
    $config->SetDireccion(['direccion']);

    $config->InsertData();

    echo "<script>alert('los datos fueron agregados exitosamente');document.location='empleados.php'</script>";

}


?>