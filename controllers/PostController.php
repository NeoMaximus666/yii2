<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 04.03.2019
 * Time: 21:12
 */

namespace app\controllers;


class PostController extends AppController
{
    public function actionTest(){
        return $this->render('test');
    }
}