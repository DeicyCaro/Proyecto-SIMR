<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Configuracion stock</title>
    <link rel="icon" type="image/x-icon" href="/imagenes/LOGO.png">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/stock.css" />
    <link rel="stylesheet" href="/componentes/header.html" />
    <link rel="stylesheet" href="/componentes/header.css" />
    <script src="/js/index.js"></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Metal+Mania&display=swap");
    </style>
  </head>
  <body>
    
    
    <!-- Aquí se cargará el header -->
    <div id="menu"></div>

    <div id="stock" class="form-section">
        <h1>Configuración de stock</h1>

<main>
    <form class="config-form" id="stock-config-form">
        <div class="form-group">
            <label for="min-quantity">Cantidad Mínima para Todos los Productos:</label>
            <input type="number" id="min-quantity" min="1" placeholder="Ej. 10" required>
        </div>
        <div class="form-group">
            <label for="alarm-time">Hora de Alarma:</label>
            <input type="time" id="alarm-time" required>
        </div>
        <div class="form-group">
            <label for="notification-method">Método de Notificación:</label>
            <select id="notification-method">
                <option value="popup">Emergente</option>
                <option value="email">Correo Electrónico</option>
                <option value="both">Ambos</option>
            </select>
        </div>
        <button type="submit">Guardar Configuración</button>
    </form>
</div>

    <div class="alert hidden" id="alert">
        <p>⚠️ Alerta: Algunos productos están por debajo de la cantidad mínima configurada.</p>
    </div>
</main>
</body>
<script>

// Escucha del formulario
document.getElementById('stock-config-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const cantidadMinima = parseInt(document.getElementById('min-quantity').value);
    const horaAlarma = document.getElementById('alarm-time').value;
    const metodoNotificacion = document.getElementById('notification-method').value;

    // Guardar configuración (puede conectarse a un backend)
    console.log('Cantidad Mínima:', cantidadMinima);
    console.log('Hora de Alarma:', horaAlarma);
    console.log('Método de Notificación:', metodoNotificacion);

    // Validación de inventario
    const productosPorDebajo = inventario.filter(p => p.cantidad < cantidadMinima);

    if (productosPorDebajo.length > 0) {
        if (metodoNotificacion === "popup" || metodoNotificacion === "both") {
            mostrarAlerta();
        }
        if (metodoNotificacion === "email" || metodoNotificacion === "both") {
            enviarCorreo(productosPorDebajo);
        }
    }
});

// Función para mostrar una alerta emergente
function mostrarAlerta() {
    const alertDiv = document.getElementById('alert');
    alertDiv.classList.remove('hidden');
}

// Simulación del envío de correo
function enviarCorreo(productos) {
    console.log("Enviando correo con los siguientes productos:");
    productos.forEach(p => console.log(`- ${p.nombre} (Cantidad: ${p.cantidad})`));
}

</script>
</html>