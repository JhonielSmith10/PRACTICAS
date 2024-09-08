<?php
include 'funciones_tienda.php';
$subtotal = 0;
$productos= [
"camisa" => 50,
"pantalon" => 70,
"zapatos" => 80,
"calcetines" => 10,
"gorra" => 25,
];
$carrito= [
"camisa" => 3,
"pantalon" => 1,
"zapatos" => 4,
"calcetines" => 3,
"gorra" => 0,
];

foreach($carrito as $producto => $cantidad){
    if(isset($productos[$producto])){
        $subtotal += $productos[$producto] * $cantidad;
    }
}

$descuento=calcular_descuento($subtotal);
$impuesto=aplicar_impuesto($subtotal);
$total=calcular_total($subtotal,$descuento,$impuesto);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
</head>
<body>
    <h1>Resumen del Carrito de Compra</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrito as $producto => $cantidad): ?>
                <?php if ($cantidad > 0): ?>
                    <tr>
                        <td><?php echo ucfirst($producto); ?></td>
                        <td><?php echo $cantidad; ?></td>
                        <td>$<?php echo $productos[$producto]; ?></td>
                        <td>$<?php echo $productos[$producto] * $cantidad; ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <p><strong>Subtotal:</strong> $<?php echo $subtotal; ?></p>
    <p><strong>Descuento:</strong> $<?php echo $descuento; ?></p>
    <p><strong>Impuesto (7%):</strong> $<?php echo $impuesto; ?></p>
    <p><strong>Total a Pagar:</strong> $<?php echo $total; ?></p>
</body>
</html>