<html>
<title>Sistema de Matricula UNICAH-MAT</title>
<style>
        body {
            margin: 0;
            padding: 0;
        }
        #contenedor {
            margin-top: 10px;
        }
        #titulo {
            font-size: 32px;
            text-align: center;
            font-weight: 500;
        }
</style>
<body>
    <div id="contenedor">
    <h3 id="titulo">Bienvenidos al Registro de la UNICAH San Isidro</h3>
    <hr>
    <br>
    <form action="guardar_alumno.php" method="POST">
        <h3>Nombre</h3>
        <input type="text" name="nombre" id="nombre">
        <br>
        <h3>Seleccione Imagen para Perfil</h5>
        <input type="file" name="imagen" id="imagen">
        <br>
        <h3>Correo Electrónico</h3>
        <input type="email" name="correo" id="correo">
        <input type="submit" value="Matricular">
    </form>
    </div>
</body>
</html>