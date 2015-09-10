<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\models\doc;

use Yii;

class Doctree extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
	 
	 public static function getDb()
    {
        /* Author -ptr.nov- :UMUM */
        return \Yii::$app->db_doc;
    }
	
    public static function tableName()
    {
        return 'tbl_tree';
    }    
    
    /**
     * Override isDisabled method if you need as shown in the  
     * example below. You can override similarly other methods
     * like isActive, isMovable etc.
    
    public function isDisabled()
    {
        if (Yii::$app->user->id !== '1') {
            return true;
        }
        return parent::isDisabled();
    }
	 */
	 public function rules()
    {
        $rules = parent::rules();
        $rules[] = ['description', 'safe'];
        return $rules;
    }
}