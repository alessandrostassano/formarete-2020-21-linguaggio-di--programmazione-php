<?php 
require "./vendor/JSONReader.php";
require "./class/Task.php";


$taskList = JSONReader("./dataset/TaskList.json");

//paradigma imperativo perchè sto impostando tutto per filo e per segno, l'aggettivo imperativo è descrittivo del modo in cui inseriamo e gli diciamo come eseguire i comandi
$taskListObj = [];

foreach ($taskList as $taskArray) {
     
     $taskObj = new Task();
     $taskObj->id = $taskArray["id"];
     $taskObj->taskName = $taskArray["taskName"];
     $taskObj->status = $taskArray["status"];
     $taskObj->expirationDate = $taskArray["expirationDate"];
     //righe 12-13-14-15-16 conversione dell'array in oggetti

     $taskListObj[] = $taskObj;
}


//metodo dichiarativo, perchè array map indica la volontà di trasformare qualcosa --> programma funzionale
//somma (4,5)
$taskListObject = array_map(function($taskArray){
    $taskObj = new Task();
    $taskObj->id = $taskArray["id"];
    $taskObj->taskName = $taskArray["taskName"];
    $taskObj->status = $taskArray["status"];
    $taskObj->expirationDate = $taskArray["expirationDate"];
    return $taskObj;

}, $taskList);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table>

<tr> <!--rappresenta una riga dellla tabella-->
    <th>Nome attività</th> <!--rappresenta una voce della tabella-->
    <th>Scaduta</th>
</tr>
<?php foreach ($taskListObj as $task) { ?>
    <tr> <!--LA PARTE DI TABELLA CHE SI DEVE RIPETERE CON  DATI VA MESSA DENTRO PHP-->
    <td><?php echo $task->taskName ?></td>
    <td><?=  $task->isExpired() ? "si" : "no" ?> </td>
    </tr>
<?php } ?>

</table>





</body>
</html>