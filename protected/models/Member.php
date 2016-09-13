<?php

/**
 * This is the model class for table "Member".
 *
 * The followings are the available columns in table 'Member':
 * @property string $nama_member
 * @property string $alamat_member
 * @property string $tglLahir_member
 * @property string $email_member
 * @property string $noTelp_member
 * @property integer $id_member
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_member, alamat_member, tglLahir_member, email_member, noTelp_member', 'required'),
			array('nama_member, alamat_member, tglLahir_member, email_member, noTelp_member', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama_member, alamat_member, tglLahir_member, email_member, noTelp_member, id_member', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nama_member' => 'Nama Member',
			'alamat_member' => 'Alamat Member',
			'tglLahir_member' => 'Tgl Lahir Member',
			'email_member' => 'Email Member',
			'noTelp_member' => 'No Telp Member',
			'id_member' => 'Id Member',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('nama_member',$this->nama_member,true);
		$criteria->compare('alamat_member',$this->alamat_member,true);
		$criteria->compare('tglLahir_member',$this->tglLahir_member,true);
		$criteria->compare('email_member',$this->email_member,true);
		$criteria->compare('noTelp_member',$this->noTelp_member,true);
		$criteria->compare('id_member',$this->id_member);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
