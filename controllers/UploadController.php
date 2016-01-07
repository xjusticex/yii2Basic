<?php

namespace app\controllers;

class UploadController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        $response = ['uploaded'=>1,
        'fileName'=>'foo.jpg',
            'url'=>'/files/foo.jpg'
        ];
        return json_encode($response);
    }

}
