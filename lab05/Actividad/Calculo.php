<?php
	$sueldo=$_POST["sueldo"];
     $importe=$_POST["importe"];
     $hijos = $_POST["hijos"];

     $comision = $importe * 0.075;
     
     if ($hijos > 0) {
          $totalh=$hijos * 50;
          $suma=$sueldo + $comision + $totalh;
          $descuento = 0.11 * $suma;
          echo "La comisión es: ".$comision ."<br>";
          echo "La bonificación es: ".$totalh ."<br>";
		echo "Su sueldo bruto es: ".$suma."<br>";
          echo "El descuento es: ".$descuento."<br>";
          echo "Total: ".$suma - $descuento;
     } else {
          $suma=$sueldo + $comision;
          $descuento = 0.11 * $suma;
          echo "La comisión es: ".$comision ."<br>";
          echo "No recibe bonificación <br>";
		echo "Su sueldo bruto es: ".$suma."<br>";
          echo "El descuento es: ".$descuento."<br>";
          echo "Total: ".$suma - $descuento;
     }
?>