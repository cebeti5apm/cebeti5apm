
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Integrantes</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eaf0f6;
            margin: 0;
            padding: 0;
        }

        .contenedor {
            width: 90%;
            max-width: 450px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #0002;
            text-align: center;
        }

        h1 {
            color: #174a75;
        }

        input {
            width: 90%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            background: #174a75;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0c304e;
        }
    </style>
</head>

<body>

<div class="contenedor">

    <h1>Registro de Integrantes</h1>

    <p>Ingresa el nombre del integrante</p>

    <form action="guardar.php" method="POST">

        <input
            type="text"
            name="nombre"
            placeholder="Nombre completo"
            maxlength="150"
            required
        >

        <br>

        <button type="submit">Guardar registro</button>

    </form>

</div>

</body>
</html>
