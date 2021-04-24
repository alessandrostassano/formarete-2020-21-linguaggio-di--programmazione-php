<?php 

$passato = new DateTime("1969-12-31 23:59:00");
$unix = new DateTime("1970-01-01"); //unix timestamp
echo $unix->getTimestamp();"\n";

$unix = new DateTime("1970-01-01 00:00:00"); //unix timestamp
echo $unix->getTimestamp();"\n";

$un_minuto_dopo = new DateTime("1970-01-01 00:01:00");

echo $un_minuto_dopo->getTimestamp()."\n";


$today = new DateTime();
echo $today->getTimeStamp()."\n";

//passato = data memorizzata nella task - getTimeStamp data di oggi
$passato -> getTimestamp() < $today->getTimestamp();
//-------------------------------------------


echo $today->format("M d Y");"\n";
echo $today->format("l d M Y");"\n";

$settimana = array ("it_IT"=>[
                            "Domenica",
                            "Lunedì",
                            "Martedì",
                            "Mercoledì",
                            ]
                        ("fr_FR") => [
                            "xxxxx"
                            "xxxxx"
                            "mercoledi in francese"
                            "xxxxx"
                        ]
                        );

echo "oggi è ".$settimana[$today->format("w")];



