
let carrito = [];

function agregarCarrito(id, nombre, precio) {

    carrito.push({
        id: id,
        nombre: nombre,
        precio: precio
    });

    actualizarCarrito();

    document.getElementById("panelCarrito").classList.remove("oculto");

}

function actualizarCarrito() {

    const lista = document.getElementById("listaCarrito");
    const contador = document.getElementById("contador");
    const total = document.getElementById("total");

    lista.innerHTML = "";

    let suma = 0;

    carrito.forEach(producto => {

        const elemento = document.createElement("li");

        elemento.textContent =
            producto.nombre + " - $" + producto.precio.toFixed(2);

        lista.appendChild(elemento);

        suma += producto.precio;

    });

    contador.textContent = carrito.length;
    total.textContent = suma.toFixed(2);

}

document.getElementById("botonCarrito").addEventListener("click", function() {

    document.getElementById("panelCarrito").classList.toggle("oculto");

});

function vaciarCarrito() {

    carrito = [];

    actualizarCarrito();

}
