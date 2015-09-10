<?php
//use yii\helpers\Html;
use kartik\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\date\DatePicker;
use kartik\builder\Form;
use kartik\tree\TreeView;
use kartik\tree\TreeViewInput;
use frontend\models\doc\Doctree;
use kartik\tree\Module;

use frontend\assets\AppDoc;  	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
AppDoc::register($this);		   /* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/

//use backend\assets\AppAsset;  	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
//AppAsset::register($this);		/* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/


$this->sideCorp = 'PT. Gosend';                   							/* Title Select Company pada header pasa sidemenu/menu samping kiri */
$this->sideMenu = 'DOCUMENTATION';                          				/* kd_menu untuk list menu pada sidemenu, get from table of database */
$this->title = Yii::t('app', 'Gosend - Order '); 					/* title pada header page */
$this->params['breadcrumbs'][] = $this->title;              			/* belum di gunakan karena sudah ada list sidemenu, on plan next*/


 
echo TreeView::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => Doctree::find()->addOrderBy('root'), 
    'headingOptions' => ['label' => 'Doc Categories'],
    'fontAwesome' => false,     // optional
    'isAdmin' => false,         // optional (toggle to enable admin mode)
    'displayValue' =>1,        // initial display value
	'iconEditSettings'=> [
        'show' => 'list',
        'listData' => [
            'folder-close' => 'Folder',
            'file' => 'File',
            'phone' => 'Phone',
            'bell' => 'Bell',
        ]
    ],
    'softDelete' => false,       // defaults to true
    'cacheSettings' => [        
        'enableCache' => false   // defaults to true
    ],
	
	//'toolbar'=>['button'=>false], 
	 'nodeView' => '@kvtree/views/_form1',
    'nodeAddlViews' => [
        Module::VIEW_PART_1 => 'a',
        Module::VIEW_PART_2 => '',
        Module::VIEW_PART_3 => '',
        Module::VIEW_PART_4 => '',
        Module::VIEW_PART_5 => '',
    ],	
	//'footerTemplate'=>'', //-Author - ptrnov  disable Footer tololbar
	 'mainTemplate'=>'    <div class="row">
        <div class="col-sm-3">
            {wrapper}
        </div>
        <div class="col-sm-9">
            {detail}
        </div>
    </div>',
	
]);

?>


