
<?php
$productos = [
    [
        "id" => 1,
        "nombre" => "Audífonos Gamer",
        "descripcion" => "Audífonos con sonido envolvente y micrófono.",
        "precio" => 25.00,
        "imagen" => "img/audifonos-bluetooth-3-5-mm-para-gamers.webp"
    ],
    [
        "id" => 2,
        "nombre" => "Teclado Mecánico",
        "descripcion" => "Teclado RGB ideal para videojuegos.",
        "precio" => 45.00,
        "imagen" => "img/teclado_mecanico.webp"
    ],
    [
        "id" => 3,
        "nombre" => "Mouse Gamer",
        "descripcion" => "Mouse óptico con iluminación RGB.",
        "precio" => 18.00,
        "imagen" => "img/Mouse-Gamer.webp"
    ],
    [
        "id" => 4,
        "nombre" => "Monitor HD",
        "descripcion" => "Monitor de alta definición de 24 pulgadas.",
        "precio" => 150.00,
        "imagen" => "img/Monitor_.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Tienda Virtual</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

<header>
    <h1>Tienda Virtual</h1>

    <button id="botonCarrito">
        🛒 Carrito (<span id="contador">0</span>)
    </button>
</header>

<main>
    <h2>Nuestros productos</h2>

    <section class="productos">

        <?php foreach ($productos as $producto): ?>

            <article class="producto">

                <img src="<?= htmlspecialchars($producto['imagen']) ?>"
                     alt="<?= htmlspecialchars($producto['nombre']) ?>">

                <h3><?= htmlspecialchars($producto['nombre']) ?></h3>

                <p><?= htmlspecialchars($producto['descripcion']) ?></p>

                <h4>$<?= number_format($producto['precio'], 2) ?></h4>

                <button onclick="agregarCarrito(
                    <?= $producto['id'] ?>,
                    '<?= htmlspecialchars($producto['nombre'], ENT_QUOTES) ?>',
                    <?= $producto['precio'] ?>
                )">
                    Agregar al carrito
                </button>

            </article>

        <?php endforeach; ?>

    </section>

    <section id="panelCarrito" class="carrito oculto">
        <h2>Mi carrito de compras</h2>

        <ul id="listaCarrito"></ul>

        <h3>Total: $<span id="total">0.00</span></h3>

        <button onclick="vaciarCarrito()">Vaciar carrito</button>
    </section>

</main>

<script src="carrito.js"></script>

</body>
</html>
