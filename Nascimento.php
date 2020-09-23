<?php 

class Nascimento extends Certidao{



     public function registrar(){
        $this->total=0;
        echo 'A certidão de nascimento '. $this->get_Number() . ' foi registrada no cartório'
        .$this->nomeCartorio. 'pelo tabelião '. $this->nomeTabeliao;
        
        echo '<br>';

        $this->total++;

        echo 'O número de certidões de nascimento emitidas é '. $this->total;


    


}