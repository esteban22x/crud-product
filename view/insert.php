<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
</head>
<body>
    
    <?php
        
        if (isset($_GET['update'])){
            echo '<br>Actualizar Producto de Id  <strong>'.$_GET['id'].'</strong>';
            echo '<br>En este ejemplo se deben modificar TODOS los campos<br>';
            $actionUrl = 'ProductAction.php?a=updateNewData&id='.$_GET['id'];
        }else{
            echo 'Insertar nuevo producto<br><br>';
            $actionUrl = 'ProductAction.php?a=insertNewData';
        }

    ?>
    <form name="formInsert" method="POST" action=<?php echo $actionUrl; ?>>
        Nombre <input type="text" name="nombre_producto" required/> <br>
        Referencia <input type="text" name="referencia" required/> <br>
        Precio <input type="number" name="precio" required/> <br>
        Peso <input type="number" name="peso" required/> <br>
        Categoria <input type="text" name="categoria" required/> <br>
        Stock <input type="number" name="stock" required/> <br>
        Fecha Ultima Venta <input type="date" name="ultimaVenta" required/> <br>
        <input type="submit" value="Registrar Producto"/>
	</form>
</body>
</html>