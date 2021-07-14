<?php
define('path', $_SERVER['DOCUMENT_ROOT']);
require_once path."/Gestao/controllers/ControllerHome.php";
require_once path."/Gestao/controllers/ControllerPaciente.php";
require_once path."/Gestao/controllers/ControllerMedico.php";


$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
echo $uri;

if($uri == '/Gestao/index.php/CadastrarPaciente' ){
$control = new controllerPaciente();
$control->inserirPacientes();
unset($control);
}elseif ( $uri == '/Gestao/' || $uri == '/Gestao/index.php'){
$control = new ControllerHome();
$control->indexAction();
unset($control);
}



?>