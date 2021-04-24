
    
    <!--public function isExpired//():bool
    // in questo metodo succede che la data con cui fare il confronto veniva decisa all'interno del metodo
    //{
        // istanza della classe DateTime
        $today = new DateTime//('today');
        $task = new DateTime//($this->getExpirationDate());
        return $task->getTimestamp//() < $today->getTimestamp(); 
    //}*/

    //nel metodo successivo sono io che ipotizzo un oggi, con una data che gli viene passata come argomento-->
   
<?php
class Task {
    
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    //public function isExpired($expirationString):bool
    public function isExpired(DateTime $expiration):bool
    {
        try {
            $expiration = new DateTime($expirationString);
            // $today = new DateTime(); //oggi
            // $expiration = new DateTime($expirationString);
            $task = new DateTime($this->expirationDate); 

            // non è oggi
            if($expiration->format('Ymd') === $task->format('Ymd')){
                return false;
            }
            return $expiration->getTimestamp() > $task->getTimestamp(); 

        } catch (\Throwable $th) {
            return $th;
        }
        return $expiration->getTimestamp() > $task->getTimestamp(); 
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}