<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
    <form action="validar.php" method="post">
        <h1>Ingreso de Usuario</h1>
        <p> Usuario: <input type="text" placeholder="Ingrese Usuario"  name="usuario"></p>
        <p> Contraseña: <input type="password" placeholder="Ingrese Contraseña"  name="contrasena"></p>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>