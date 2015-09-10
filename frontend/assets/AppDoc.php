<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * The asset bundle for the offline template.
 *
 * @author Carsten Brandt <mail@cebe.cc>
 * @since 2.0
 */
 
 class AppDoc extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
		'css/doc/assets/css/api.css',
		'css/doc/assets/css/style.css',
    ];
    public $js = [
		'css/doc/assets/js/jssearch.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
       'yii\bootstrap\BootstrapAsset',
       'yii\bootstrap\BootstrapPluginAsset',
    ];
	
	//public $jsOptions = [
     //   'position' => View::POS_HEAD,
    //];
}



