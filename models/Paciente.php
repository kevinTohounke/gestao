<?php
require_once 'Sql.php';

class Paciente{
    private $nome;
    private $mesNascimento;
    private $diaNascimento;
    private $anoNascimento;
    private $sexo;
    private $endereco;
    private $idMedico;

    private $string;

    


    public function getString(){
        return "benfica";
    }
    
    
   
    public function getNome(){
        return $this->nome;
    }

    public function setNome($value){
        $this->nome=$value;
    }

    public function getMesNascimento(){
            return $this->mesNascimento;
    }

    public function setMesNascimento($value){
             $this->mesNascimento=$value;

    }


    public function getDiaNascimento(){
        return $this->diaNascimento;
    }

    public function setDiaNascimento($value){
     $this->diaNascimento=$value;

    }

    public function getAnoNascimento(){
        return $this->anoNascimento;
    }

    public function setAnoNascimento($value){
        $this->anoNascimento=$value;

    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($value){
        $this->sexo=$value;

    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($value){
        $this->endereco=$value;
    }

    public function getIdMedico(){
        return $this->idMedico;
    }

    public function setIdMedico($value){
        $this->idMedico = $value;
    }

    public function listarPaciente(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM paciente");
    }

    public function listarPacientePorNome($value){
        $sql = new Sql();

        return $sql->select("SELECT * FROM paciente WHERE nome=:NM", array(":NM"=>$value));
    }

    public function inserirPaciente(){
            
            $conn = new PDO("mysql:host=localhost;dbname=gestao","root","");

            $stmt = $conn->prepare("INSERT INTO paciente (nome, mesNascimento, anoNascimento, diaNascimento, sexo, endereco, idMedico) 
            
            VALUES(:NAMEVAR, :MONTHVAR, :YEARVAR, :DAYVAR, :SEXVAR, :LOCATIONVAR, :IDMVAR )");


            $stmt->bindValue(":NAMEVAR",$this->getNome() );
            $stmt->bindValue(":MONTHVAR",$this->getMesNascimento());
            $stmt->bindValue(":YEARVAR",$this->getAnoNascimento());
            $stmt->bindValue(":DAYVAR", $this->getDiaNascimento());
            $stmt->bindValue(":SEXVAR", $this->getSexo());
            $stmt->bindValue(":LOCATIONVAR", $this->getEndereco());
            $stmt->bindValue(":IDMVAR", $this->getIdMedico());

            $stmt->execute();

           

    }

    public function __toString(){
        return json_encode(array(

           "Nome :"=>$this->getNome(),
           "Mes de Nascimento"=>$this->getMesNascimento(),
           "Dia de Nascimento"=>$this->getDiaNascimento(),
           "Ano de Nascimento"=>$this->getAnoNascimento(),
           "Sexo"=>$this->getSexo(),
           "Endereco"=>$this->getEndereco(),
           "Id Medico"=>$this->getIdMedico()
        ));
    }


    



    
}


?>