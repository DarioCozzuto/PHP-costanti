<!DOCTYPE html>
<html>
<body>

<?php

// la costante è una funzione il cui valore non può cambiare
// la costante si dichiara con la dicitura define
// la sintassi della costante è define(nome, valore, opzionale case-insensitive tramite true)
// la costante è automaticamente globale

define("Costante","510");
echo Costante;                   //stampa 510


//array in una costante
define("Costante",["a","b","c"]);
echo Costante[0];                //stampa a


?>
 
</body>
</html>