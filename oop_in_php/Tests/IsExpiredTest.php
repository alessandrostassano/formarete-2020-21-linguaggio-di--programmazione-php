<?php 
require ".vendor/testTools/testTool.php";
require "./class/task.php;

//PER LANCIARE IL TEST DA LINEA DI COMANDO DEVO ANDARE DENTOR LA CARTELLA IN QUESTION, NON DA TUTA LA CARTELLA DEL PROGETTO QUINDI IN QUESTO CASO OOP

$ArrayEsercizio = [
    [
        "id": 5497,
        "taskName": "integer ac leo pellentesque ultrices",
        "status": "done",
        "expirationDate": "1997-08-98",
        "expectedResult" => false;
    ],
    [
        "id": 4639,
        "taskName": "venenatis tristique",
        "status": "progress",
        "expirationDate": "2022-09-02",
        "expectedResult" => true;
    ],
    [
        "id": 5497,
        "taskName": "integer ac leo pellentesque ultrices",
        "status": "done",
        "expirationDate": "2010-08-98",
        "expectedResult" => false;
    ],
    [
        "id": 4639,
        "taskName": "venenatis tristique",
        "status": "progress",
        "expirationDate": "2021-09-02",
        "expectedResult" => true;
    ]
];

$ArrayOggetti = [];

foreach ($ArrayEsercizio as $pippo){
    $taskObj = new Task();
    $taskObj->id = $pippo["id"];
    $taskObj->taskName = $pippo["taskName"];
    $taskObj->status = $pippo["status"];
    $taskObj->expirationDate = $pippo["expirationDate"];
    $ArrayOggetti = $taskObj;
    echo $ArrayOggetti;
    $check = $pippo["expectedResult"];
}



