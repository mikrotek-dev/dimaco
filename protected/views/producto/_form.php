<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_producto'); ?>
		<?php echo $form->textField($model,'nombre_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_producto'); ?>
		<?php echo $form->textField($model,'codigo_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'codigo_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stock_producto'); ?>
		<?php echo $form->textField($model,'stock_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'stock_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio_producto'); ?>
		<?php echo $form->textField($model,'precio_producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'precio_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_marca'); ?>
		<?php echo $form->textField($model,'id_marca'); ?>
		<?php echo $form->error($model,'id_marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
		<?php echo $form->error($model,'id_pedido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->