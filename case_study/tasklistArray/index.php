<?php

print_r($_GET);

//model (la parte che gestisce i dati dell')
require "./lib/JSONReader.php";
require "./lib/searchFunctions.php";
//controller dice ah hai premuto il tasto più , chiedo allora al model di fare l'operazione
$taskList = JSONReader("./dataset/TaskList.json");
if (isset($_GET["searchText"])) {
    $searchText = trim(filter_var($_GET["searchText"],FILTER_SANITIZE_STRING));
    $taskList = array_filter($taskList, searchText($searchText));
}else {
    $searchText = "";
}




var_dump($searchText);
?>


<!-- view (vista) visualizzazione / intercetta azioni dell'utente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style.css">
    <title>Task list</title>
</head>
<body>
    <form action="index.php">
    <input type="text" <?= $searchText ?> name="searchText">
    <button type="submit">cerca</button>
    </form>
    <ul>
        <?php 
        foreach ($taskList as $key => $task) { 
            
            $status = $task["status"];
            $taskName = $task["taskName"];

        ?>
        
        <li class="tasklist-item tasklist-item-<?= $status ?>">
       <?= $taskName ?>
       <b><?= $status ?></b>

        
        <?php } ?>
       
        <li class="tasklist-item tasklist-item-done">uova <b>done</b></li>
        <li class="tasklist-item tasklist-item-todo">uova <b>todo</b>
    </ul>
</body>
</html>
