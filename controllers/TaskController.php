<?php
/**
 * Created by PhpStorm.
 * User: tiys
 * Date: 18.04.2019
 * Time: 3:41
 */

namespace app\controllers;
use yii\web\Controller;

class TaskController extends Controller
{
	public function actionAddTask (){
		return $this->render('addTask');
	}
}