<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nama_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_member'); ?>
		<?php echo $form->textField($model,'alamat_member',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'alamat_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglLahir_member'); ?>
		<?php echo $form->textField($model,'tglLahir_member',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'tglLahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'email_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noTelp_member'); ?>
		<?php echo $form->textField($model,'noTelp_member',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'noTelp_member'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->