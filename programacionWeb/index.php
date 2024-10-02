<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Grupo 3</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <header>
        <h1>Proyecto Grupo 3</h1>

        <div class="imagen">
            <img loading="lazy" src="img/destacada3.jpg" alt="Imagen Contacto">
        </div>
    </header>

        <h2>Completar formulario para la Reserva</h2>

        <form action="funcion.php" method="POST" class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input 
                    type="text" 
                    placeholder="Tu Nombre"
                    name="nombre" 
                />
                <label for="apellido">Apellido</label>
                <input 
                    type="text" 
                    placeholder="Tu Apellido"
                    name="apellido" 
                />
                <label for="email">E-mail</label>
                <input 
                    type="email" 
                    placeholder="Tu Email"
                    name="email" 
                />

                <label for="telefono">Teléfono</label>
                <input 
                    type="tel" 
                    placeholder="Tu Teléfono"
                    name="telefono"     
                />
            </fieldset>

            <fieldset>
                <legend>Información sobre la Reserva</legend>

                <label for="opciones">Fecha de check-in:</label>
                <input 
                    type="date"
                    name="checkin" 
                />
                <label for="opciones">Fecha de Check-Out:</label>
                <input 
                    type="date"
                    name="checkout" 
                />
                <label for="opciones">Numero de personas:</label>
                <input 
                    type="number"
                    min="1"
                    required
                    name="personas" 
                />                
                <label for="opciones">Tipo de Habitacion:</label>
                <select name="habitacion">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Habitacion Simple">Habitacion Simple</option>
                    <option value="Habitacion Doble">Habitacion Doble</option>
                    <option value="Suite">Suite</option>
                    <option value="Habitacion Familiar">Habitacion Familiar</option>
                </select>

                <label for="opciones">Servicio Adicionales:</label>
                <select name="servicios">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Desayuno Incluido">Desayuno Incluido</option>
                    <option value="Traslados">Traslados hacia/desde Aeropuerto</option>
                    <option value="Cama extra">Cama Extra</option>
                    <option value="Buena vista">Vista al mar</option>
                </select>

            </fieldset>

            <fieldset>
                <legend>Metodos de Pago</legend>

                <label for="pago">Forma de Pago:</label><br>
                <input 
                    name="pago" 
                    type="radio" 
                    id="tarjeta" 
                    value="tarjeta" 
                    required
                />
                <label for="tarjeta">Tarjeta de Crédito</label><br>
                <input 
                    name="pago" 
                    type="radio" 
                    id="paypal" 
                    value="paypal"
                />
                <label for="paypal">Mercado Pago</label><br>
                <input 
                    name="pago" 
                    type="radio" 
                    id="efectivo" 
                    value="efectivo"
                />
                <label for="efectivo">Pago en Efectivo</label><br>
            </fieldset>

            <input type="submit" value="Continuar">
        </form>


    <footer>
        <p>Todos los derechos Reservados,  &copy; Grupo 3  -  <?php echo date("Y"); ?> </p>
    </footer>

</body>
</html>