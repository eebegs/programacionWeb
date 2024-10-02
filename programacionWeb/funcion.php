<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Grupo 3</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<?php

$datosCliente = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datosCliente = [
        'nombre' => $_POST['nombre'],
        'apellido' => $_POST['apellido'],
        'email' => $_POST['email'],
        'telefono' => $_POST['telefono'],
        'checkin' => $_POST['checkin'],
        'checkout' => $_POST['checkout'],
        'personas' => $_POST['personas'],
        'habitacion' => $_POST['habitacion'],
        'servicios' => isset($_POST['servicios']) ? $_POST['servicios'] : [],
        'pago' => $_POST['pago']
    ];
}

if (!empty($datosCliente)): ?>
    <div class="formulario">
    <h2>Confirmacion de Reserva</h2>
    <table border="1">
        <tr>
            <th>Datos</th>
            <th>Informacion de Reserva</th>
        </tr>
        <tr>
            <td>Nombre Completo</td>
            <td><?php echo $datosCliente['nombre'] . ' ' . $datosCliente['apellido']; ?></td>
        </tr>
        <tr>
            <td>Correo Electronico</td>
            <td><?php echo $datosCliente['email']; ?></td>
        </tr>
        <tr>
            <td>Numero de Telefono</td>
            <td><?php echo $datosCliente['telefono']; ?></td>
        </tr>
        <tr>
            <td>Fecha de Check-in</td>
            <td><?php echo $datosCliente['checkin']; ?></td>
        </tr>
        <tr>
            <td>Fecha de Check-out</td>
            <td><?php echo $datosCliente['checkout']; ?></td>
        </tr>
        <tr>
            <td>Numero de Personas</td>
            <td><?php echo $datosCliente['personas']; ?></td>
        </tr>
        <tr>
            <td>Tipo de Habitacion</td>
            <td><?php echo $datosCliente['habitacion']; ?></td>
        </tr>
        <tr>
            <td>Servicios Adicionales</td>
            <td>
                <?php
                if (is_array($datosCliente['servicios'])) {
                    echo implode(', ', $datosCliente['servicios']);
                } else {
                    echo $datosCliente['servicios'];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Forma de Pago</td>
            <td><?php echo $datosCliente['pago']; ?></td>
        </tr>
    </table>
    </div>
<?php endif; ?>

    <footer>
        <p>Todos los derechos Reservados,  &copy; Grupo 3  -  <?php echo date("Y"); ?> </p>\
    </footer>

</body>
</html>
