<?php

namespace frontend\controllers;

use Yii;
use common\models\Company;
use yii\data\ActiveDataProvider;

class CompaniesController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Company::find()->active(),
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
        $model = new Company();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

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
