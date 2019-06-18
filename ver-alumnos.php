<?php
$pdo = new PDO('mysql:dbname=matricula_unicah;host:127.0.0.1', 'root','orel199719');
$stms = $pdo->query('SELECT * FROM alumnos')
?>
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
    <h3 id="titulo">Bienvenidos al sistema de matricula de la UNICAH San Isidro</h3>
    <hr>
    <br>
    <h2>Alumnos Matriculados</h2>
    <?php foreach ($stms as $alumnos_matriculados): ?>
    <div>
    
        <table style="border: solid 1px black">

            <tr>
                <td>Nombre:</td>
                <td><?php echo $alumnos_matriculados['nombre_completo'] ?></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><?php echo $alumnos_matriculados['correo'] ?></td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>
</body>    
</html>