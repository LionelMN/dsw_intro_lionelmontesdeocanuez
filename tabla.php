<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Tabla</title>
</head>
<body>
    <?php
        echo '
            <table border=1>
                <tr>
                    <td>'.date('r').'</td>
                    <td>'.date('H:i:s:a').'</td>
                </tr>
            </table>
            ';
    ?>
</body>
</html>