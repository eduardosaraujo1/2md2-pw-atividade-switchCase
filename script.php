<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor favorita</title>
    <style>
        :root {
            font-family: Arial, Helvetica, sans-serif;
        }
        p {
            font-size: 1.4em;
            width: 100%;
            text-align: center;
        }
        .red {
            color: red;
        }
        .blue {
            color: blue;
        }
        .green {
            color: green;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $favcolor = $_POST["favcolor"];
            // Utilizando o switch case para determinar a cor favorita
            switch ($favcolor) {
                case 'vermelho':
                    echo "<p class=\"red\">Sua cor favorita é vermelho!</p>";
                    break;
                case 'azul':
                    echo "<p class=\"blue\">Sua cor favorita é azul!</p>";
                    break;
                case 'verde':
                    echo "<p class=\"green\">Sua cor favorita é verde!</p>";
                    break;
                default:
                    echo "<p>Sua cor favorita não é vermelho, azul ou verde!</p>";
            }
        ?>
    </div>
</body>
</html>