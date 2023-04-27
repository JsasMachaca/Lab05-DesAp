<?php
     $precio = 8;
     $cantidad = $_POST["cantidad"];
     $desc = 0.05 * $precio;
     $total = $precio - $desc;
     $caramelo = 2;
     if ($cantidad > 1) {
          $descespecial = $cantidad * $total;
          $premio = $caramelo * $cantidad;
          echo "Tu obtienes un descuento especial ".$descespecial ."<br>";
          echo "Te llevas de regalo ". $premio ." caramelos";
     }else{
          echo "El descuento normal es: ".$total ."<br>";
          echo "Te llevas de regalo ". $caramelo ." caramelos";
     }

?>