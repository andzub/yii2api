<?php

namespace app\controllers;

use Yii;
use app\api\Api;

class AuthorController extends Api
{
    public function actionIndex()
    {
        $server = $this->getApiServer();
        $data = file_get_contents($server . Yii::$app->request->url);
        return $this->render('index', ['data' => $data]);
    }

    public function actionView($id)
    {
        $server = $this->getApiServer();
        $data = file_get_contents($server . Yii::$app->request->url);
        return $this->render('view', ['data' => $data]);
    }
}
