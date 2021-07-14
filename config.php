<?php

spl_autoload_register($class_name){

    $filename= "models".DIRECTORY_SEPARATOR.$class_name.".php";
    if(file_exists(($filename))){

        require_once($filename);
    }
}

?>