<?php
 require_once './models/Paciente.php';
 
class ControllerPaciente{
    function listarPaciente(){

    }

    function inserirPacientes(){

if(isset($_POST['guardar']))
{
  $paciente = new Paciente();
  $paciente->setNome( $_POST['nome']);
  
  $paciente->setMesNascimento($_POST['mesNascimento']);

  $paciente->setDiaNascimento($_POST['diaNascimento']);

  $paciente->setAnoNascimento($_POST['anoNascimento']);

  $paciente->setSexo($_POST['sexo']);

  $paciente->setEndereco($_POST['endereco']);

  $paciente->setIdMedico($_POST['idMedico']);


  $paciente->inserirPaciente();
 
  echo "<br/>".$paciente;
  

}else {
  require './views/CadastrarPaciente.php';
}

    }

    function listarPacientePorNome($value){

    }

   
}
?>