<?php

namespace common\models\query;

use common\models\Company;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[\common\models\Company]].
 *
 * @see \common\models\Company
 */
class CompaniesQuery extends ActiveQuery
{
    public function active()
    {
        return $this->andWhere([Company::tableName() . '.is_active' => 1]);
    }

    /**
     * @inheritdoc
     * @return Company[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Company|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
