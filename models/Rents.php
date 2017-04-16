<?php

namespace app\models;

use app\models\Clients;
use Yii;

/**
 * This is the model class for table "rents".
 *
 * @property integer $id
 * @property integer $client_id
 * @property integer $address
 * @property double $value
 */
class Rents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id','value','address'], 'required'],
            [['value'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client',
            'address' => 'Address',
            'value' => 'Value',
        ];
    }

     public function getClient()
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }
}
