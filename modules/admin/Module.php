<?php

namespace app\modules\admin;

use Yii;

class Module extends \yii\base\Module
{

    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $this->layout = 'main';
        $this->defaultRoute = 'index';
        $this->setAliases(array(
            '@admin' => __DIR__,
        ));
        $this->registerTranslations();
    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/'.$this->id.'/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@'.$this->id.'/messages',
            'fileMap' => [
                'modules/admin/validation' => 'validation.php',
                'modules/admin/form' => 'form.php',
                'modules/admin/app' => 'app.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/admin/' . $category, $message, $params, $language);
    }
}
