<?php

/*=============================================
Mostrar errores
=============================================*/

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log",  "C:/xampp/htdocs/Art_Gir/backend/php_error_log");



date_default_timezone_set("America/Bogota");

include_once "controllers/plantilla.Controller.php";

$plantilla = new ControllerPlantilla();
$plantilla->plantilla();