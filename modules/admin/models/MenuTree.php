<?php

namespace app\modules\admin\models;

use Yii;
use app\modules\admin\Module;

/**
 * This is the model class for table "menu_tree".
 *
 * @property integer $id
 * @property string $name
 * @property integer $parent_id
 * @property string $flat_dir
 * @property string $children
 */
class MenuTree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_tree';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'parent_id'], 'integer'],
            [['name', 'flat_dir', 'children'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Module::t('app', 'ID'),
            'name' => Module::t('app', 'Name'),
            'parent_id' => Module::t('app', 'Parent ID'),
            'flat_dir' => Module::t('app', 'Flat Dir'),
            'children' => Module::t('app', 'Children'),
        ];
    }

    /**
     * @inheritdoc
     * @return MenuTreeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MenuTreeQuery(get_called_class());
    }
}
