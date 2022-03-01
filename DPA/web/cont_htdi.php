<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div>
    Dependencia datos <br> Llena todos los campos
    <form action="../php/dependencias.php" method="post">
        <input type="text" name="nom_depe" placeholder="Nombre Dependencia">
        <div>
        Datos del encargado <br>
        <input type="text" name="nom_enca" placeholder="Nombre del Directivo">
        <input type="text" name="puesto_cargo" placeholder="Puesto que ocupa">
        
            fecha de nombramiento
            <input type="date" name="fecha_cargo" id="">
        </div>

        <div>
            <h3>
                Ciclo escolar
            </h3>
            <div>
                Inicio del ciclo
                <input type="date" name="ciclo_ini" id="">
            </div>
            <div>
                Fin del Ciclo
                <input type="date" name="ciclo_fin" id="">
            </div>
        </div>
        <input type="submit" value="Siguiente">
    </form>
</div>

</body>
</html>