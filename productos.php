
<?php

header('Content-Type: application/json; charset=utf-8');

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

echo json_encode($productos, JSON_UNESCAPED_UNICODE);

?>
