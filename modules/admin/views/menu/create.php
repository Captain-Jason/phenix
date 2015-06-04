<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MenuTree */

$this->title = Yii::t('app/modules/admin/kkk', 'Create Menu Tree');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app/modules/admin/kkk', 'Menu Trees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-tree-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
