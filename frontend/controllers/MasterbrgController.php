<?php
namespace app\modules\api\controllers;
use Yii;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * CityController implements the CRUD actions for City model.
 */
class UserController extends Controller
{
   
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                     'index'=>['get'],
                     'view'=>['get'],
                     'create'=>['post'],
                     'update'=>['post'],
                     'delete' => ['delete'],
                     'deleteall'=>['post'],
                ],
              
            ]
        ];
    }
	
	
	
	
	
}