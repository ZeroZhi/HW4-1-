<?php

   function treugolnik($a,$h) {
      $s=0.5*$a*$h;
      return $s;
 }

   function priamougolnik($a,$b) {
      $s=$a*$b;
      return $s;
 }

   function krug($r) {
      $pi=3.141592;
      $s=$pi*($r*$r);
      return $s;
 }
