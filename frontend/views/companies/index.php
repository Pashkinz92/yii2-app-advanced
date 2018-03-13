<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-header">

        <div class="btn-group">
            <?= Html::a('Generate Some Companies', ['generate'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Create Random Company', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update Random Company', ['update'], ['class' => 'btn btn-warning']) ?>
            <?= Html::a('Delete Random Company', ['delete'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'title',
                'address',
                'email:email',
                'foundedAt',
                'BIC',
                'is_active:boolean',
            ],
        ]); ?>
    </div>
</div>
