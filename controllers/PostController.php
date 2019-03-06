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
//    установка шаблона для контроллера Post
    public $layout = 'basic';

    public function actionIndex(){
//        $this->layout = 'basic';
        return $this->render('test');
    }
    public function actionShow(){
        return $this->render('show');
    }
}