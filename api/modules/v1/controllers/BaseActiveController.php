<?php
/**
 * Created by PhpStorm.
 * User: King
 * Date: 2017/5/8
 * Time: 14:35
 */

namespace api\modules\v1\controllers;


use yii\filters\auth\QueryParamAuth;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class BaseActiveController extends ActiveController
{
    public $modelClass = 'common\models\User';

    public function behaviors()
    {
        return ArrayHelper::merge(parent::behaviors(), [
            'authenticator' => QueryParamAuth::className(),
        ]);
    }
}