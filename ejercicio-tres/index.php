<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio tres</title>
    <style>
        table,
        th,
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
            <th>Fecha.</th>
        </tr>
        <?php
        echo "<tr>
        <td>", date("l") . " " . date("d") . " de " . date("F") . " de " . date("Y") . "</td>
    </tr>" . //Fecha normal

            "<tr>
        <td>", date("d") . "/" . date("m") . "/" . date("y") . "</td>
    </tr>" . //dd/mm//aa

            "<tr>
        <td>", date("l") . " " . date("j") . "  " . date("h") . ":" . date("i") . " " . date("A") . "</td>
    </tr>" .

            "<tr>
        <td>", date("W") . " " . date("F")  . "</td> //no funciona
    </tr>";

        ?>
    </table>
</body>

</html>