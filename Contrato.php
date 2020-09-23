<?php

abstract class Contrato implements Registro
{

private $numeroRegistro;
public  $nomesDasPartes;
public  $nomesTestemunhas;
public  $dataEmissao;
public  $dataRegistro;
public  $nomeTabeliao;
public  $nomeCartorio;


public function __construct($numeroRegistro,  $nomesDasPartes, $nomesTestemunhas, $dataEmissao,
$dataRegistro,$nomeTabeliao, $nomeCartorio )
{
$this->numeroRegistro=$numeroRegistro;
$this->nomesDasPartes=$nomesDasPartes;
$this->nomesTestemunhas=$nomesTestemunhas;
$this->dataEmissao=$dataEmissao;
$this->dataRegistro=$dataRegistro;
$this->nomeTabeliao=$nomeTabeliao;
$this->$nomeCartorio=$nomeCartorio;
}

public function set_Number($numeroRegistro){
    $this->numeroRegistro=$numeroRegistro;
}
public function get_Number(){
    return $this->numeroRegistro;
}





}


