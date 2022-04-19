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
            <th>Tabla del <?php print $_REQUEST['primer_numero']; ?></th>
        </tr>

        <?php
        for ($i = 1; $i < 11; $i++) {
            $total = $i * $_REQUEST['primer_numero'];
            echo
            "<tr>
                <td>" . $i . " * " . $_REQUEST['primer_numero'] . " = " .  "</td>
                <td>" . $total . "</td>
            </tr>";
        };
        ?>
    </table>

    <table>
        <tr>
            <th>Tabla del <?php print $_REQUEST['segundo_numero']; ?></th>
        </tr>
        <?php
        $i = 1;
        while ($i < 11) {
            $total = $i * $_REQUEST['segundo_numero'];
            echo "<tr>
                <td>" . $i . " * " . $_REQUEST['segundo_numero'] . " = " .  "</td>
                <td>" . $total . "</td>
            </tr>";
            $i++;
        };
        ?>
    </table>
    <table>
        <tr>
            <th>Tabla del <?php print $_REQUEST['tercer_numero']; ?>.</th>
        </tr>
        <?php
        $i = 1;
        do {
            $total = $i * $_REQUEST['tercer_numero'];
            echo "<tr>
            <td>" . $i . " * " . $_REQUEST['tercer_numero'] . " = " .  "</td>
                <td>", $total, "</td>
            </tr>";

            $i++;
        } while ($i < 11);
        ?>

    </table>
</body>

</html>

<table>