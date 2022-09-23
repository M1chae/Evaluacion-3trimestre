<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h1>Bienvenido estimado:</h1>
    <?php
    echo $_POST["nombre"];
    ?><br>
    E-mail:
    <?php
    echo $_POST["email"];
    ?><br> 
    Apellido Paterno:
    <?php
    echo $_POST["ap"];
    ?><br>
    Apellido Materno:
    <?php
    echo $_POST["am"];
    ?><br>
    Edad:
    <?php
    echo $_POST["edad"];
    ?><br>
    
    
</body>
</html>