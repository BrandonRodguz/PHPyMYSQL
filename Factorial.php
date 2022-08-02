<html>
    <head>
        <title> Factorial </title>
    <head>

        <body>
            <form method="POST"> 
                <label>Ingresa un numero entero: </label>
                <input type="text" name= "entrada">
                <br>
                <button type= "submit">Calcular</button> 
                <br>
                <label> El resultado es: </label>
            
            </form>
        </body>   
     /html>      


<?php
    
    $n = $_POST ["entrada"];
    function factorial ($n){

         if ( $n == 0 || $n == 1){
           return 1;
        } else 
           return $n *factorial ($n-1);
    }
   echo factorial($n);
?>