<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property string $id
 * @property string $dt_create
 * @property integer $is_active
 * @property integer $is_remove
 * @property string $k_user
 * @property string $s_name
 * @property string $s_adress
 * @property string $s_phone
 * @property string $s_email
 * @property string $s_personnel
 * @property string $s_description
 * @property string $s_need
 */
class Content extends CActiveRecord
{
  /**
   * Returns the static model of the specified AR class.
   *
   * @param string $className active record class name.
   *
   * @return Content the static model class
   */

  protected function beforeSave()
  {
    $is_valid=false;

    if(Yii::app()->user->isGuest)
      return false;

    if(empty($this->id))
    {
      $this->dt_create=date('Y:m:d H:i:s');
      $this->k_user=Yii::app()->user->id;
      $is_valid=true;
    }

    if(in_array(Yii::app()->user->name,Yii::app()->user->getAdmins()))
    {
      $this->is_active=!empty($_POST['is_active']);
      $this->is_remove=!empty($_POST['is_remove']);
      $is_valid=true;
    }

    if(Yii::app()->user->id==$this->k_user)
      $is_valid=true;

    return $is_valid;
  }

  public static function model($className=__CLASS__)
  {
    return parent::model($className);
  }

  /**
   * @return string the associated database table name
   */
  public function tableName()
  {
    return 'content';
  }

  /**
   * @return array validation rules for model attributes.
   */
  public function rules()
  {
    // NOTE: you should only define rules for those attributes that
    // will receive user inputs.
    return array(
      array(
        's_name, s_adress, s_phone, s_email, s_personnel, s_description, s_need',
        'required'
      ),
      array(
        'is_active, is_remove',
        'numerical',
        'integerOnly'=>true
      ),
      array(
        'k_user',
        'length',
        'max'=>20
      ),
      array(
        'dt_create, is_active, is_remove, k_user',
        'safe'
      ),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array(
        'id, dt_create, is_active, is_remove, k_user, s_name, s_adress, s_phone, s_email, s_personnel, s_description, s_need',
        'safe',
        'on'=>'search'
      ),
    );
  }

  /**
   * @return array relational rules.
   */
  public function relations()
  {
    // NOTE: you may need to adjust the relation name and the related
    // class name for the relations automatically generated below.
    return array();
  }

  /**
   * @return array customized attribute labels (name=>label)
   */
  public function attributeLabels()
  {
    return array(
      'id'=>'ID',
      'dt_create'=>'Дата создания',
      'is_active'=>'Активно',
      'is_remove'=>'Удалено',
      'k_user'=>'Владелец',
      's_name'=>'Имя',
      's_adress'=>'Адрес',
      's_phone'=>'Телефон',
      's_email'=>'E-mail',
      's_personnel'=>'Ответственный',
      's_description'=>'Описание',
      's_need'=>'Нужно',
    );
  }

  /**
   * Retrieves a list of models based on the current search/filter conditions.
   * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
   */
  public function search()
  {
    // Warning: Please modify the following code to remove attributes that
    // should not be searched.

    $criteria=new CDbCriteria;

    $criteria->compare('id',$this->id,true);
    $criteria->compare('dt_create',$this->dt_create,true);
    $criteria->compare('is_active',$this->is_active);
    $criteria->compare('is_remove',$this->is_remove);
    $criteria->compare('k_user',$this->k_user,true);
    $criteria->compare('s_name',$this->s_name,true);
    $criteria->compare('s_adress',$this->s_adress,true);
    $criteria->compare('s_phone',$this->s_phone,true);
    $criteria->compare('s_email',$this->s_email,true);
    $criteria->compare('s_personnel',$this->s_personnel,true);
    $criteria->compare('s_description',$this->s_description,true);
    $criteria->compare('s_need',$this->s_need,true);

    return new CActiveDataProvider($this,array(
      'criteria'=>$criteria,
    ));
  }
}