<?php

if (isset($_POST['Enviar'])){
    $numero = $_POST['numero'];

    function multiplicacion($a){

        for ($i=0; $i <=10 ; $i++) { 
            echo "La multiplicacion de $i * $a es igual a:".$i*$a. "<br>";
        }
    
    }
    
    multiplicacion($numero);
};




?>