<?php
// Definir las variables
$sueldoBasico = 600; // Sueldo básico
$porcentajeComision = 7.5; // Porcentaje de comisión
$descuentoPorcentaje = 11; // Porcentaje de descuento
$bonificacionPorHijo = 50; // Bonificación por hijo en edad escolar

// Solicitar al usuario el importe total vendido del mes y la cantidad de hijos en edad escolar
$importeTotalVendido = floatval(readline("Ingrese el importe total vendido del mes: "));
$cantidadHijosEscolar = intval(readline("Ingrese la cantidad de hijos en edad escolar: "));

// Calcular la comisión
$comision = ($importeTotalVendido * $porcentajeComision) / 100;

// Calcular la bonificación
$bonificacion = $bonificacionPorHijo * $cantidadHijosEscolar;

// Calcular el sueldo bruto
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;

// Calcular el descuento
$descuento = ($sueldoBruto * $descuentoPorcentaje) / 100;

// Calcular el sueldo neto
$sueldoNeto = $sueldoBruto - $descuento;

// Mostrar los resultados
echo "Comisión: S/. " . number_format($comision, 2) . "\n";
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "\n";
echo "Sueldo Bruto: S/. " . number_format($sueldoBruto, 2) . "\n";
echo "Descuento: S/. " . number_format($descuento, 2) . "\n";
echo "Sueldo Neto: S/. " . number_format($sueldoNeto, 2) . "\n";
?>
