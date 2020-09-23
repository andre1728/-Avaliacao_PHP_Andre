<?php 

abstract class Certidao implements Registro
{

   private  $numeroRegistro;
   public   $nomePessoa;
   public   $nomeDeclarante;
   public   $dataEmissao;
   public   $nomeTabeliao;
   public   $nomeCartorio;

   abstract public function registrar();
   

   public function __construct($numeroRegistro,  $nomePessoa, $nomeDeclarante, $dataEmissao,
$nomeTabeliao, $nomeCartorio )
{
  $this->numeroRegistro=$numeroRegistro;
  $this->nomePessoa=$nomePessoa;
  $this->nomeDeclarante=$nomeDeclarante;
  $this->dataEmissao=$dataEmissao;

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


