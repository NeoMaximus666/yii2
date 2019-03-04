<?php
/**
 * Created by PhpStorm.
 * User: MAX
 * Date: 04.03.2019
 * Time: 21:08
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }
}

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}