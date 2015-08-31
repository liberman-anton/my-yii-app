<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "bootstrap";

        return $this->render('index');
    }

    public function actionPath(){
        // псевдонимы путей
        //@yii -путь до папки с фреймворком
        //@app -путь до текущей активеой папки)(frontend/backend)
        //@runtime -//-
        //@webroot -frontend/web или backend/web
        //@web -url до теущей корневой папки web
        //@vender
        //@bower -in vendor
        //@npm -//-
        //@frontend
        //@backend

        print \Yii::getAlias('@test');

    }
}
