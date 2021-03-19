<?php 

class Task {
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool
    {
        //una variabile che appartiene ad una classe si chiama attributo! 
        //today è una istanza della classe DateTime
        $today = new DateTime ();
        $task = new DateTime($this->expirationDate);

        //possiamo usare le informazioni e gli attributi per utilizzarle nei metodi e sapere se una task è scaduta

        return $task > today;
        // gettype($today) object
        // get_class($today) DateTime
    }
    
    public function getExpirationDate() 
    {
        return $this->expirationDate;
    }
}