<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        table,
        tr,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>
                Datos Personales.
            </th>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><?php
                print $_REQUEST['dato_nombre'] ?></td>
        </tr>
        <tr>
            <td>Apellido:</td>
            <td><?php
                print $_REQUEST['dato_apellido'] ?></td>
        </tr>
        <tr>
            <td>DNI:</td>
            <td><?php
                print $_REQUEST['num_doc'] ?></td>
        </tr>
        <tr>
            <td>Correo:</td>
            <td><?php if (!filter_var($_REQUEST['correo_electronico'], FILTER_VALIDATE_EMAIL)) {
                    print "Correo invalido";
                } else {
                    print $_REQUEST['correo_electronico'];
                };
                ?></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><?php
                if ($_REQUEST['dato_edad'] >= 18) {
                    print "Mayor de edad";
                } else {
                    print "Menor de edad";
                } ?></td>
        </tr>
        <tr>
            <td>Estado Civil:</td>
            <td><?php
                print $_REQUEST['dato_estado'] ?></td>
        </tr>
        <tr>
            <td>Hijos:</td>
            <td><?php
                print $_REQUEST['dato_hijo'] ?></td>
        </tr>
        <tr>
            <td>Hobbies:</td>
            <td><?php
                print $_REQUEST['dato_hobbie'] ?></td>
        </tr>
        <tr>
            <th>Datos de Vivienda</th>
        </tr>
        <tr>
            <td>Calle y Piso:</td>
            <td><?php echo $_REQUEST['direccion_calle']
                    .
                    $_REQUEST['direccion_numero'] ?></td>
        </tr>
        <tr>
            <td>Torre y Piso:</td>
            <td><?php echo $_REQUEST['direccion_torre']
                    .
                    $_REQUEST['direccion_piso'] ?></td>
        </tr>
        <tr>
            <td>Localidad:</td>
            <td><?php
                print $_REQUEST['direccion_loca'] ?></td>
        </tr>
        <tr>
            <td>Pais:</td>
            <td><?php
                print $_REQUEST['direccion_pais'] ?></td>
        </tr>
        <tr>
            <td>Departamento, Provincia:</td>
            <td><?php
                echo $_REQUEST['direccion_depto'] . ", " . $_REQUEST['direccion_provincia'] ?></td>
        </tr>
    </table>
</body>

</html>