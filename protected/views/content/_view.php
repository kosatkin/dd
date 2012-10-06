<?php
/* @var $this ContentController */
/* @var $data Content */
?>

<div class="view">

  <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
  <?php echo CHtml::link(CHtml::encode($data->id),array(
  'view',
  'id'=>$data->id
)); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('dt_create')); ?>:</b>
  <?php echo CHtml::encode($data->dt_create); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('is_active')); ?>:</b>
  <?php echo CHtml::encode($data->is_active); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('is_remove')); ?>:</b>
  <?php echo CHtml::encode($data->is_remove); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('k_user')); ?>:</b>
  <?php echo CHtml::encode($data->k_user); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('s_name')); ?>:</b>
  <?php echo CHtml::encode($data->s_name); ?>
  <br/>

  <b><?php echo CHtml::encode($data->getAttributeLabel('s_adress')); ?>:</b>
  <?php echo CHtml::encode($data->s_adress); ?>
  <br/>

  <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('s_phone')); ?>:</b>
	<?php echo CHtml::encode($data->s_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_email')); ?>:</b>
	<?php echo CHtml::encode($data->s_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_personnel')); ?>:</b>
	<?php echo CHtml::encode($data->s_personnel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_description')); ?>:</b>
	<?php echo CHtml::encode($data->s_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_need')); ?>:</b>
	<?php echo CHtml::encode($data->s_need); ?>
	<br />

	*/ ?>

</div>