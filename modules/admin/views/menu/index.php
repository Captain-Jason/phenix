<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\admin\Module;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MenuTreeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('app', 'Menu Trees');
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="content_wrapper">
<div class="menu-tree-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Module::t('app', 'Create Menu Tree'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
</section>
