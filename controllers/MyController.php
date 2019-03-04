<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 04.03.2019
 * Time: 20:22
 */

namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
}