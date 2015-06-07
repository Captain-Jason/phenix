<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}
