<?php

class Paciente{
    private $nome;
    private $mesNascimento;
    private $diaNascimento;
    private $anoNascimento;
    private $sexo;
    private $endereco;

   



    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getMesNascimento(){
            return $this->mesNascimento;
    }

    public function setMesNascimento($mesNascimento){
             $this->mesNascimento=$mesNascimento;

    }


    public function getDiaNascimento(){
        return $this->diaNascimento;
    }

    public function setDiaNascimento($diaNascimento){
     $this->diaNascimento=$diaNascimento;

    }

    public function getAnoNascimento(){
        return $this->anoNascimento;
    }

    public function setAnoNascimento($anoNascimento){
        $this->anoNascimento=$anoNascimento;

    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo=$sexo;

    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco=endereco;
    }

    
}


?>