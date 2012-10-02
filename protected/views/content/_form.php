<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>

<div class="form">

  <?php $form=$this->beginWidget('CActiveForm',array(
  'id'=>'content-form',
  'enableAjaxValidation'=>false,
)); ?>

  <p class="note">Fields with <span class="required">*</span> are required.</p>

  <?php echo $form->errorSummary($model); ?>

  <div class="row">
    <?php echo $form->labelEx($model,'dt_create'); ?>
    <?php echo $form->textField($model,'dt_create'); ?>
    <?php echo $form->error($model,'dt_create'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'is_active'); ?>
    <?php echo $form->textField($model,'is_active'); ?>
    <?php echo $form->error($model,'is_active'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'is_remove'); ?>
    <?php echo $form->textField($model,'is_remove'); ?>
    <?php echo $form->error($model,'is_remove'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_name'); ?>
    <?php echo $form->textField($model,'s_name'); ?>
    <?php echo $form->error($model,'s_name'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_adress'); ?>
    <?php echo $form->textField($model,'s_adress'); ?>
    <?php echo $form->error($model,'s_adress'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_phone'); ?>
    <?php echo $form->textField($model,'s_phone'); ?>
    <?php echo $form->error($model,'s_phone'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_email'); ?>
    <?php echo $form->textField($model,'s_email'); ?>
    <?php echo $form->error($model,'s_email'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_personnel'); ?>
    <?php echo $form->textField($model,'s_personnel'); ?>
    <?php echo $form->error($model,'s_personnel'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_description'); ?>
    <?php echo $form->textArea($model,'s_description'); ?>
    <?php echo $form->error($model,'s_description'); ?>
  </div>

  <div class="row">
    <?php echo $form->labelEx($model,'s_need'); ?>
    <?php echo $form->textField($model,'s_need'); ?>
    <?php echo $form->error($model,'s_need'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton($model->isNewRecord?'Create':'Save'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- form -->