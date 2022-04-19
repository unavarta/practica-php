<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        tr {
            width: 50%;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Tabla del 4</th>
        </tr>
        <?php
        for ($i = 1; $i < 11; $i++) {
            $total = $i * 4;
            echo
            "<tr>
                <td>", $i . " * 4 = " .  "</td>
                <td>", $total, "</td>
            </tr>";
        };
        ?>
    </table>

    <table>
        <tr>
            <th>Tabla del 5</th>
        </tr>
        <?php
        $i = 1;
        while ($i < 11) {
            $total = $i * 5;
            echo "<tr>
                <td>", $i . " * 5 = " .  "</td>
                <td>", $total, "</td>
            </tr>";
            $i++;
        };
        ?>
    </table>
    <table>
        <tr>
            <th>Tabla del 6.</th>
        </tr>
        <?php
        $i = 1;
        do{
            $total = $i * 6;
            echo "<tr>
                <td>", $i . " * 6 = " .  "</td>
                <td>", $total, "</td>
            </tr>";

            $i++;
        }while($i < 11);
        ?>

    </table>
</body>

</html>

<table>