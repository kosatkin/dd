<?php
/* @var $this ContentController */
/* @var $model Content */
/* @var $form CActiveForm */
?>

<div class="wide form">

  <?php $form=$this->beginWidget('CActiveForm',array(
  'action'=>Yii::app()->createUrl($this->route),
  'method'=>'get',
)); ?>

  <div class="row">
    <?php echo $form->label($model,'id'); ?>
    <?php echo $form->textField($model,'id',array(
    'size'=>20,
    'maxlength'=>20
  )); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'dt_create'); ?>
    <?php echo $form->textField($model,'dt_create'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'is_active'); ?>
    <?php echo $form->textField($model,'is_active'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'is_remove'); ?>
    <?php echo $form->textField($model,'is_remove'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_name'); ?>
    <?php echo $form->textField($model,'s_name'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_adress'); ?>
    <?php echo $form->textField($model,'s_adress'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_phone'); ?>
    <?php echo $form->textField($model,'s_phone'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_email'); ?>
    <?php echo $form->textField($model,'s_email'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_personnel'); ?>
    <?php echo $form->textField($model,'s_personnel'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_description'); ?>
    <?php echo $form->textField($model,'s_description'); ?>
  </div>

  <div class="row">
    <?php echo $form->label($model,'s_need'); ?>
    <?php echo $form->textField($model,'s_need'); ?>
  </div>

  <div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
  </div>

  <?php $this->endWidget(); ?>

</div><!-- search-form -->