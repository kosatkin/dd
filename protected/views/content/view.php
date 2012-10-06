<?php
/* @var $this ContentController */
/* @var $model Content */

$this->breadcrumbs=array(
  'Contents'=>array('index'),
  $model->id,
);

$this->menu=array(
  array(
    'label'=>'List Content',
    'url'=>array('index')
  ),
  array(
    'label'=>'Create Content',
    'url'=>array('create')
  ),
  array(
    'label'=>'Update Content',
    'url'=>array(
      'update',
      'id'=>$model->id
    )
  ),
  array(
    'label'=>'Delete Content',
    'url'=>'#',
    'linkOptions'=>array(
      'submit'=>array(
        'delete',
        'id'=>$model->id
      ),
      'confirm'=>'Are you sure you want to delete this item?'
    )
  ),
  array(
    'label'=>'Manage Content',
    'url'=>array('admin')
  ),
);
?>

<h1>View Content #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
  'data'=>$model,
  'attributes'=>array(
    'id',
    'dt_create',
    'is_active',
    'is_remove',
    'k_user',
    's_name',
    's_adress',
    's_phone',
    's_email',
    's_personnel',
    's_description',
    's_need',
  ),
)); ?>
