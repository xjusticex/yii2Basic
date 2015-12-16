<?php

namespace app\controllers;

use app\models\User;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $name = $_REQUEST['name'];
        $password = $_REQUEST['password'];

    }
}
