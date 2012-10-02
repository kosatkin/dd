<?php

/**
 * This is the model class for table "content".
 *
 * The followings are the available columns in table 'content':
 * @property string $id
 * @property string $dt_create
 * @property integer $is_active
 * @property integer $is_remove
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
        'dt_create',
        'safe'
      ),
      // The following rule is used by search().
      // Please remove those attributes that should not be searched.
      array(
        'id, dt_create, is_active, is_remove, s_name, s_adress, s_phone, s_email, s_personnel, s_description, s_need',
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
      'dt_create'=>'Dt Create',
      'is_active'=>'Is Active',
      'is_remove'=>'Is Remove',
      's_name'=>'S Name',
      's_adress'=>'S Adress',
      's_phone'=>'S Phone',
      's_email'=>'S Email',
      's_personnel'=>'S Personnel',
      's_description'=>'Описание',
      's_need'=>'S Need',
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