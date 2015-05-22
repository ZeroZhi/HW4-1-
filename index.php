<?php

require "geometria.php";
 
     $name = file_get_contents('name.txt');
  $surname = file_get_contents('surname.txt');
    $summa = mb_strlen($name) + mb_strlen($surname);

  if ($summa>10 && $summa<12) {

      echo krug($summa);

    } elseif ($summa>10 && $summa<15) {

  	  echo treugolnik(strlen($name),strlen($surname));

    } elseif ($summa>15) {

      echo krug(strlen($name));

    } elseif ($summa<=10) {

  	  echo factorial($summa);
    
    }