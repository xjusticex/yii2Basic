<?php

namespace app\controllers;

class UploaderController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {

        if ((($_FILES["upload"]["type"] == "image/gif")
                || ($_FILES["upload"]["type"] == "image/jpeg")
                || ($_FILES["upload"]["type"] == "image/pjpeg")
                || ($_FILES["upload"]["type"] == "image/png")
            )
            && ($_FILES["upload"]["size"] < 20000))
        {
            if ($_FILES["upload"]["error"] > 0)
            {
                $response = ['uploaded'=>0,
                    'error'=>['message'=>"Return Code: " . $_FILES["upload"]["error"]]
                ];
            }
            else
            {
                if (file_exists("upload/" . $_FILES["upload"]["name"]))
                {
                    $response = ['uploaded'=>0,
                        'error'=>['message'=>$_FILES["upload"]["name"] . " already exists. "]
                    ];
                }
                else
                {
                    move_uploaded_file($_FILES["upload"]["tmp_name"],
                        "upload/" . $_FILES["upload"]["name"]);
                    $response = ['uploaded'=>1,
                        'fileName'=>$_FILES["upload"]["name"],
                        'url'=>"upload/" . $_FILES["upload"]["name"]
                    ];
                }
            }
        }
        else
        {
            $response = ['uploaded'=>0,
                'error'=>['message'=>"Invalid file"]
            ];
        }
        return json_encode($response);
    }

}
