<?php
//soltanto l'oggetto stesso puo modificare il suo stato interno
//motivi per cui bisogna impostar ei getter and setter, per modificare i suoi attributi
class Veicolo {

    public $npasseggeri = 0;
    public $motore;
    public $serbatoio = 0;
    public $carburante;
    public $sposta;
    public $posizione = 0;


    public function __construct () {
        $this -> serbatoio = $serbatoio;
        $this -> carburante = 0;
        $this -> npasseggeri = npasseggeri;
    }


    public function sposta($spostamento) 
    {
        if ($this->carburante !== 0) {
            $this->posizione += $spostamento;
            $this->carburante = $spostamento;
        }
    }
    
    public function rifornimento($carburante) 
    {
        if ($this->serbatoio < carburante) {
            return new Exception("Troppa benzina");
        }
    }
  
}




?>