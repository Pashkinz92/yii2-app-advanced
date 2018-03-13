<?php

namespace common\models;

use common\models\query\CompaniesQuery;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "companies".
 *
 * @property integer $id
 * @property string $title
 * @property string $address
 * @property string $email
 * @property string $foundedAt
 * @property string $BIC
 * @property integer $is_active
 *
 * @property User[] $users
 */
class Company extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'address', 'email', 'BIC'], 'required'],
            [['foundedAt'], 'safe'],
            [['is_active'], 'boolean'],
            [['title', 'address', 'email', 'BIC'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('companies_employees', ['company_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CompaniesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CompaniesQuery(get_called_class());
    }
}
