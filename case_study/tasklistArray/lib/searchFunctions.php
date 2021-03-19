<?php 
/*funzione di ordine superiore che restituisce una funzione*/

function searchText($searchText) {

    // searchText : locale
    // per fare in modo che $searchTextsia visibile (ambito) all'interno della funzione anonima
    // devo usare "use"
    return function($taskItem) use ($searchText){
        ($taskItem["taskName"]);
        //echo "sto cercando $searchText";

        $result = strpos($taskItem["taskName"], $searchText)!== false;
        //La stringa superiore mi sta dicendo cercami un testo dentro un altro testo, se lo trovi restituiscimi in che posizione si trova (stringpos), se non lo trovi resistuisicmi falso
        return $result;
        //print_r($searchText);
        //print_r($taskItem);
    };
}


function searchStatus(string $status){
    return function($taskItem) use ($status) {
        $result = strpos($taskItem["status"],$status) !== false;
        return $result;
    }
}

