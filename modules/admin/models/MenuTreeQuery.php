<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[MenuTree]].
 *
 * @see MenuTree
 */
class MenuTreeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MenuTree[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MenuTree|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}