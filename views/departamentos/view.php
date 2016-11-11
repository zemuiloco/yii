<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Departamentos */

$this->title = $model->codiDepa;
//$this->params['breadcrumbs'][] = ['label' => 'Departamentos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamentos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codiDepa',
            'nomeDepa',
        ],
    ]) ?>
   <p>
        <?= Html::a('Delete', ['delete', 'id' => $model->codiDepa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
