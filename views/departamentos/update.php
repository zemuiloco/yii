<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departamentos */

$this->title = 'Update Departamentos: ' . $model->codiDepa;
$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codiDepa, 'url' => ['view', 'id' => $model->codiDepa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->renderAjax('_form', [
        'model' => $model,
    ]) ?>

</div>
