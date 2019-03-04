<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 04.03.2019
 * Time: 20:22
 */

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}