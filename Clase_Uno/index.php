<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #333;
            color: #fff;
        }

        header {
            background-color: #222;
            color: #4CAF50;
            padding: 10px;
            text-align: center;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #4CAF50;
        }

        input[type="text"] {
            padding: 8px;
            background-color: #444;
            color: #fff;
            border: 1px solid #4CAF50;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        p {
            margin-top: 20px;
            text-align: center;
        }

        footer {
            margin-top: 50px;
            background-color: #222;
            color: #4CAF50;
            padding: 10px;
            text-align: center;
        }

        .error {
            color: red;
        }
    </style>
    <title>Calcular Factorial</title>
</head>

<body>
    <!-- TITULO -->
    <header>
        <h1>Calcular el Factorial de un número</h1>
    </header>
    <!-- PROCESO  -->
    <form action="" method="post">
        <label for="numero">Número:</label><br>
        <input type="text" id="numero" name="numero"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número ingresado desde el formulario
        $numeroIngresado = $_POST["numero"];

        // Validar si el input es un entero no negativo y solo contiene dígitos
        $esNumeroValido = true;
        for ($i = 0; $i < strlen($numeroIngresado); $i++) {
            if (!ctype_digit($numeroIngresado[$i])) {
                $esNumeroValido = false;
                break;
            }
        }
        if ($esNumeroValido && $numeroIngresado >= 0) {
            // Calcular el factorial usando el bucle for
            $factorial = calcularFactorial($numeroIngresado);

            // Mostrar el resultado
            echo "<p>El factorial de $numeroIngresado es $factorial.</p>";
        } else {
            // Mostrar un mensaje de error si el input no es válido
            echo "<p class='error'>Por favor, ingrese un número entero no negativo válido.</p>";
        }
    }
    // Función para calcular el factorial de un número
    function calcularFactorial($numero)
    {
        if ($numero == 0 || $numero == 1) {
            return 1;
        } else {
            $factorial = 1;
            for ($i = 2; $i <= $numero; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }
    }
    ?>
    <!-- Footer -->
    <footer>
        &copy; 2023 Calcular Factorial                   
        <br> &copy; 2023 autor Jhonny Miranda Uniandes</br>               
    </footer>
</body>

</html>
