<?php

namespace app\controllers;

use Yii;
use app\api\Api;

class BookController extends Api
{
    public function actionIndex()
    {
        $server = $this->getApiServer();
        $data = file_get_contents($server . Yii::$app->request->url);
        return $this->render('index', ['data' => $data]);
    }
}
