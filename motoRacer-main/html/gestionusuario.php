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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestión de Usuarios</title>
  <link rel="icon" type="image/x-icon" href="/imagenes/LOGO.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="/css/gestionusuario.css">
  <link rel="stylesheet" href="/componentes/header.html">
  <link rel="stylesheet" href="/componentes/header.css">
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Metal+Mania&display=swap');
  </style>
</head>

<body>
  <!-- Aquí se cargará el header -->
  <div id="menu"></div>

  <div id="gestionusuario" class="form-section">
    <h1>Gestión Usuarios</h1>

    <div class="container">
      <table class="user-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="row-gray">
            <td>1</td>
            <td>Juan Pérez</td>
            <td>
              <button class="btn-permissions" onclick="showPermissions()">Permisos</button>
              <button class="btn-delete">Eliminar</button>
            </td>
          </tr>
          <tr class="row-ocre">
            <td>2</td>
            <td>Maria Gómez</td>
            <td>
              <button class="btn-permissions" onclick="showPermissions()">Permisos</button>
              <button class="btn-delete">Eliminar</button>
            </td>
          </tr>
          <tr class="row-gray">
            <td>3</td>
            <td>Carlos López</td>
            <td>
              <button class="btn-permissions" onclick="showPermissions()">Permisos</button>
              <button class="btn-delete">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal de Permisos -->
    <div id="permissions-modal" class="modal">
      <div class="modal-content">
        <span class="close" onclick="closePermissions()">&times;</span>
        <h2>Otorgar Permisos</h2>
        <table class="permissions-table">
          <thead>
            <tr>
              <th>Módulo</th>
              <th>Permitir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Productos</td>
              <td><input type="checkbox"></td>
            </tr>
            <tr>
              <td>Proveedor</td>
              <td><input type="checkbox"></td>
            </tr>
            <tr>
              <td>Facturación</td>
              <td><input type="checkbox"></td>
            </tr>
            <tr>
              <td>Inventario</td>
              <td><input type="checkbox"></td>
            </tr>
            <tr>
              <td>Usuarios</td>
              <td><input type="checkbox"></td>
            </tr>
            <tr>
              <td>Configuración</td>
              <td><input type="checkbox"></td>
            </tr>
          </tbody>
        </table>
        <button type= "submit"class="btn-save">Guardar</button>
      </div>
    </div>
  </div>

  <script src="../js/index.js"></script>
  <script src="/js/gestionusuraio.js"></script>
</body>

</html>
