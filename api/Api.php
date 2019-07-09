<?php

namespace app\api;

use yii\web\Controller;

class Api extends Controller
{
    private $server = 'http://94.254.0.188:4000';

    public function getApiServer()
    {
        return $this->server;
    }
}