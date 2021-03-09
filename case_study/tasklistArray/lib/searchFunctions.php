<?php 
/*funzione di ordine superiore che restituisce una funzione*/

function searchText($searchText) {

    // searchText : locale
    // per fare in modo che $searchTextsia visibile (ambito) all'interno della funzione anonima
    // devo usare "use"
    return function($taskItem) use ($searchText){
        print_r($taskItem["taskName"]);
        echo "sto cercando $searchText";

        $result = strpos($taskItem["taskName"], $searchText);
        //print_r($searchText);
        //print_r($taskItem);
    };
}

