<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 04.03.2019
 * Time: 20:49
 */
namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex(){
        return $this->render('index');
    }
}