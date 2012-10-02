<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
  'Все дома',
);

if(!Yii::app()->user->isGuest)
{
  $this->menu=array(
    array(
      'label'=>'Создать запись',
      'url'=>array('create')
    ),
    array(
      'label'=>'Управление записями',
      'url'=>array('admin'),
    ),
  );
}
?>

<h1>Contents</h1>

<?php $this->widget('zii.widgets.CListView',array(
  'dataProvider'=>$dataProvider,
  'itemView'=>'_view',
)); ?>
