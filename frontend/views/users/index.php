<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="panel-header">

        <div class="btn-group">
            <?= Html::a('Generate Some Users', ['generate'], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Create Random User', ['create'], ['class' => 'btn btn-success']) ?>
            <?= Html::a('Update Random User', ['update'], ['class' => 'btn btn-warning']) ?>
            <?= Html::a('Delete Random User', ['delete'], ['class' => 'btn btn-danger']) ?>
        </div>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'id',
                'first_name',
                'last_name',
                'email:email',
                'status:boolean',
                'created_at:datetime',
                'updated_at:datetime',
            ],
        ]); ?>
    </div>
</div>
