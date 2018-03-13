<?php

namespace frontend\controllers;

use common\models\User;
use yii\data\ActiveDataProvider;

class UsersController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionGenerate()
    {

    }

    public function actionCreate()
    {
        return $this->redirect(['index']);
    }

    public function actionUpdate()
    {
        return $this->redirect(['index']);
    }

    public function actionDelete()
    {
        return $this->redirect(['index']);
    }
}
