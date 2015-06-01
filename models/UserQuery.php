<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UserTest]].
 *
 * @see UserTest
 */
class UserQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return UserTest[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserTest|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}