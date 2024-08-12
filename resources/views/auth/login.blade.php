<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            /* Evita scroll si la imagen es más grande que el viewport */
        }

        body {
            background-color: #ffffff;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://www.pagegear.co/es/img-hYwxDsMgDEVvw4jTLJ2YOnTtFSxwgcpgKyHx9YNUde709J6-vrNwW5fFlS-saUjSaq-yQ5SzxiIbckKvmCkTbj4KKGMflRl3-GVw7wCvKc8pD5YjgZlBGY1BM8H_00NZMAGd1MfcrXf_0XwB.jpeg?184974663');
            background-size: cover;
            /* Ajusta el tamaño para cubrir todo el fondo */
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.3;
            z-index: -1;
            /* Asegura que esté en el fondo */
        }

        .contenido {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .footer {
            background-color: #e27575;
            padding: 10px 0;
            font-weight: 700;
        }

        .header {
            background-color: #e27575;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .login-form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .image-contenedor {
            max-width: 300px;
            width: 100%;
            background-color: #e27575;
        }
    </style>
</head>

<body>
    <!-- Encabezado -->
    <header class="header">
        <img class="image-contenedor"
            src="data:image/png;base64,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"
            alt="Logo" srcset="">
    </header>

    <!-- Contenido -->
    <div class="contenido">
        <div class="login-form">
            <h1 style="align-content: center">
                Iniciar Sesion
            </h1>

            <form>
                <div class="mb-3 row">
                    <label for="usuario" class="form-label col-sm-3">Usuario</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="usuario">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="contrasena" class="form-label col-sm-3">Contraseña</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control col-sm-9" id="contrasena">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p>Facultad: Ingeniería de Sistemas</p>
                </div>
                <div class="col text-center">
                    <p>Curso: Programación orientada a objetos</p>
                </div>
                <div class="col text-center">
                    <p>Autor: María Camila Ariza Pinzón</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
