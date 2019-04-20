<?php

use yii\validators\Validator;

/**
 * Результат-ориентированная формулировка задач означает, что в случае выполнения этой задачи,
 * точно будет завершено какое-либо действие, а не будет участие в каком-то процессе,
 * который целью не является, поэтому желательно, чтобы в формулировке был указан глагол,
 * но полноценная проверка ориентированности на результат невозможна
 */
class ResultOrientedValidator extends Validator
{
	public $terms=('finish','done','/^\w+ть/','/^\w+ие\W/');
	/**
	 * @var array dictionary of words expressing result oriented formulation of tasks.
	 */
	public function validateAttribute($model, $attribute)
	{
		foreach ($terms as $term){
			if($attribute!='' && !preg_match($term, $attribute)){
				$this->addError($model,$attribute, $this->message);
			}
		}
	}
}