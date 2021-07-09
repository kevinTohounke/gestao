<?php

class Internacao{
    private $causa;
    private $cama;
    private $sala;
    private $tempo;
    private $analisado;
    private $estado;
    private $operado;

    private $mesInternacao;
    private $diaInternacao;
    private $anoInternacao;
    
    private $mesAlta;
    private $anoAlta;
    private $diaAlta;

    public function getCausa(){
        return $this->causa;
    }
    public function setCausa($causa){
        $this->causa=$causa;
    }

    public function getCama(){
        return $this->cama;  
    }

    public function setCama($cama){
        $this->cama=$cama;
    }

    public function getSala(){
        return $this->sala;
    }

    public function setSala($sala){
        $this->sala=$sala;
    }

    public function getTempo(){
        return $this->tempo;
    }
    public function setTempo($tempo){
        $this->tempo=$tempo;
    }

    public function getAnalisado(){
        return $this->analisado;
    }

    public function setAnalisado($analisado){
        $this->analisado=$analisado;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }

    public function getOperado(){
        return $this->operado;
    }

    public function setOperado($operado){
        $this->operado=$operado;
    }

    public function getMesInternacao(){
        return $this->mesInternacao;
    }

    public function setMesInternacao(){
        $this->mesInternacao=mesInternacao;
    }

    public function getDiaInternacao(){
        return $this->diaInternacao;
    }

    public function setDiaInternacao($diaInternacao){
        $this->diaInternacao=$diaInternacao;
    }

    public function getAnoInternacao(){
        return $this->anoInternacao;
    }
    
    public function setAnoInternacao($anoInternacao){
        $this->anoInternacao=$anoInternacao;
    }

    public function getMesAlta(){
        return $this->mesAlta;
    }

    public function setMesAlta($mesAlta){
        $this->mesAlta=$mesAlta;
    }

    public function getAnoAlta(){
        return $this->anoAlta;
    }
    public function setAnoAlta($anoAlta){
        $this->anoAlta=$anoAlta;
    }

    public function getDiaAlta(){
        return $this->diaAlta;
    }

    public function setDiaAlta($diaAlta){
        $this->diaAlta=$diaAlta;
    }

}

?>