<?php

   function treugolnik($a,$h)
 {
   $s=0.5*$a*$h;
   echo 'S треугольника ='. $s."<br>";
 }

  treugolnik(3,4);

   function priamougolnik($a,$b)
 {
   $s=$a*$b;
   echo 'S прямоугольника ='. $s."<br>";
 }

  priamougolnik(2,1);

   function krug($r)
 {
   $pi=3.141592;
   $s=$pi*($r*$r);
   echo 'S круга ='. $s."<br><br><br><br>";
 }

  krug(5);
