<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Todo</title>
</head>
<body>
    <?php 
      //require('../model/Product.php');
      use Model\Product;
      $objProduct = new Product();
    ?>
<table>
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Referencia</th>
				<th>Precio</th>
				<th>Peso</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Fecha Creacion</th>
                <th>Fecha Ultima Venta</th>
                <th>Actualizar Producto</th>
                <th>Borrar Producto</th>
				</tr>
			</thead>
			<tbody>		
		<?php
		foreach ($objProduct->viewAll()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->referencia; ?> </td>
			<td>$ <?php echo $data->precio; ?> </td>
			<td> <?php echo $data->peso; ?> </td>
            <td> <?php echo $data->categoria; ?> </td>
            <td> <?php echo $data->stock; ?> </td>
            <td> <?php echo $data->fechaCreacion; ?> </td>
            <td> <?php echo $data->ultimaVenta; ?> </td>
            <td> <a href='../controller/ProductAction.php?a=update&update=true&id=<?php echo $data->id ?>' >Actualizar</a></td>
            <td> <a href='../controller/ProductAction.php?a=delete&id=<?php echo $data->id ?>' >Borrar</a></td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	

    <a href="../index.php">Volver Al Inicio</a>
</body>
</html>