<?php require 'settings/conexion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../DPA/css/normalize.css">
</head>
<body>
<header> 
    <div>
        <h1>Universidad Autonoma de Chiapas</h1>
    </div>
    <div>
        <nav>
            <ul>
                <li><a href="">Dependencias</a></li>
                <li><a href="">Ver contratos</a></li>
            </ul>
        </nav>
    </div>
</header>

<div>
    <h3>CONTRATOS</h3>
    <div>
        <h4>Tiempo Determinado</h4>
        <a href="web/cont_htd.php">Empezar</a>
    </div>
    <div>
        <h4>Tiempo Determinado para cubrir Interinato</h4>
        <a href="web/cont_htdi.php">Empezar</a>
    </div>
</div>

<div>  
    Dependencias
    <table>
        <th>Nombre</th>
        <th>Encargado</th>
        <th>Fecha nombramiento</th>

        <?php 
        $sel = pg_query($conn, "SELECT 'nom_depe','nom_enca','puesto_cargo' FROM dependencias");
        while ($fila = $sel -> fetch_assoc() ){
        ?>
        <tr>
            <td><?php echo $fila['nom_depe'] ?></td>
            <td><?php echo $fila['nom_enca'] ?></td>
            <td><?php echo $fila['puesto_cargo'] ?></td>
        </tr>

       <?php } ?>

    </table>
</div>
<footer>

</footer>

</body>
</html>


