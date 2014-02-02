<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Producto', 'url'=>array('index')),
	array('label'=>'Administracion Producto', 'url'=>array('admin')),
);
?>

<h1>Registro de Producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>