<?php
/**
 * Created by PhpStorm.
 * User: tiys
 * Date: 18.04.2019
 * Time: 23:57
 */

namespace app\models;
use app\validators\ResultOrientedValidator;
use yii\base\Model;

class TaskForm extends Model
{
	public $title;
	public $description;
	public $author;
	public $responsible;
	public $status;

	public function rules(){
		return [
			// required fields
			[['title', 'author', 'responsible', 'status'], 'required'],
			// should contain words implies finished actions
			[['title','description'], resultOrientedValidator::class],
			// should contain one of the following conditions: backlog, to do, in progress, finished
			['status', 'checkCondition', 'possibleConditions' =>['backlog','to do','in progress','finished']],
		];
	}
}