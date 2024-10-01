<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configura la ventana gráfica para que el diseño sea responsive -->
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"> <!-- Enlace a la hoja de estilos de Bulma -->
</head>
<body>
    <section class="section"> <!-- Define una sección de la página -->
        <div class="container"> <!-- Contenedor centralizado para el contenido -->
            <div class="columns is-centered"> <!-- Contenedor para columnas, centrado horizontalmente -->
                <div class="column is-one-third"> <!-- Columna que ocupa un tercio del ancho -->
                
                <form action="login2.php" method="post" class="box"> 
                        <h1 class="title has-text-centered">Iniciar Sesión</h1> <!-- Título centrado del formulario -->
                         <!-- Contenedores para campos del formulario -->
                        <div class="field">
                            <label class="label">Usuario</label>
                            <div class="control">
                                <input class="input" type="text" name="usuario" placeholder="Ingrese su usuario"> 
                            </div>
                        </div>

                        <div class="field"> 
                            <label class="label">Contraseña</label>
                            <div class="control">
                                <input class="input" type="password" name="contrasena" placeholder="Ingrese su contraseña"> 
                            </div>
                        </div>
                        <!-- Contenedor para el botón de envío -->
                        <div class="field"> 
                            <div class="control"> <!-- Contenedor para el control del botón -->
                            <!-- Botón de envío, estilo primario y ancho completo -->    
                            <button class="button is-primary is-fullwidth">Ingresar</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
