<?php
/* @var $this ProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Productos',
);

$this->menu=array(
	array('label'=>'Registro Producto', 'url'=>array('create')),
	array('label'=>'Administracion Producto', 'url'=>array('admin')),
);
?>

<h1>Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	// Brinda una opcion para ordenar la lista de nombres de producto(nombre_producto)
	 'sortableAttributes'=>array(
        'nombre_producto',
    ),

)); ?>
