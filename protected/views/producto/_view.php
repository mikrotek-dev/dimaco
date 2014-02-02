<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_producto), array('view', 'id'=>$data->id_producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_producto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_producto')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_almacen_producto')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_almacen_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_tienda_producto')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_tienda_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_producto')); ?>:</b>
	<?php echo CHtml::encode($data->stock_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio_producto')); ?>:</b>
	<?php echo CHtml::encode($data->precio_producto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_marca')); ?>:</b>
	<?php echo CHtml::encode($data->id_marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->id_pedido); ?>
	<br />

	*/ ?>

</div>