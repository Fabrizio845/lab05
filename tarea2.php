<?php
// Definir las variables
$precioActualGaseosa = floatval(readline("Ingrese el precio actual de la gaseosa de 3 litros: "));
$cantidadUnidadesAdquiridas = intval(readline("Ingrese la cantidad de unidades adquiridas: "));

// Calcular el nuevo precio de la gaseosa con el descuento del 5%
$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * 0.05);

// Calcular el importe de la compra antes del descuento
$importeCompraAntesDescuento = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;

// Calcular el importe del descuento (7% del importe de la compra antes del descuento)
$importeDescuento = ($importeCompraAntesDescuento * 0.07);

// Calcular el importe a pagar (importe de la compra - importe del descuento)
$importeAPagar = $importeCompraAntesDescuento - $importeDescuento;

// Calcular el número de caramelos obsequiados (2 caramelos por cada gaseosa)
$obsequioCaramelos = $cantidadUnidadesAdquiridas * 2;

// Mostrar los resultados
echo "Nuevo precio de la gaseosa de 3 litros: S/. " . number_format($nuevoPrecioGaseosa, 2) . "\n";
echo "Importe de la compra antes del descuento: S/. " . number_format($importeCompraAntesDescuento, 2) . "\n";
echo "Importe del descuento: S/. " . number_format($importeDescuento, 2) . "\n";
echo "Importe a pagar, Fabrizio: S/. " . number_format($importeAPagar, 2) . "\n";
echo "Obsequio: " . $obsequioCaramelos . " caramelos\n";
?>
