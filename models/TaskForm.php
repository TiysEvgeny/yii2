<?php
/**
 * Created by PhpStorm.
 * User: tiys
 * Date: 18.04.2019
 * Time: 23:57
 */

namespace app\models;
use yii\base\Model;

class Task extends Model
{
	public $title;
	public $description;
	public $author;
	public $responsible;
	public $status;
}