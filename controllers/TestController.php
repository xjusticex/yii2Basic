<?php

namespace app\controllers;

class TestController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpload()
    {
        echo 'upload';
    }
}
