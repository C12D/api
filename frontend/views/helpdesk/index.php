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
use yii\apidoc\models\ClassDoc;
use yii\apidoc\models\InterfaceDoc;
use yii\apidoc\models\TraitDoc;

//use backend\assets\AppAsset;  	/* CLASS ASSET CSS/JS/THEME Author: -ptr.nov-*/
//AppAsset::register($this);		/* INDEPENDENT CSS/JS/THEME FOR PAGE  Author: -ptr.nov-*/

$this->sideCorp = 'PT. Gosend';                   							/* Title Select Company pada header pasa sidemenu/menu samping kiri */
$this->sideMenu = 'gsn_helpdesk';                          				/* kd_menu untuk list menu pada sidemenu, get from table of database */
$this->title = Yii::t('app', 'Gosend - Helpdesk '); 					/* title pada header page */
$this->params['breadcrumbs'][] = $this->title;              			/* belum di gunakan karena sudah ada list sidemenu, on plan next*/





/* @var $types ClassDoc[]|InterfaceDoc[]|TraitDoc[] */
/* @var $this yii\web\View */

?>

<h1>Class Reference</h1>

<table class="summaryTable docIndex">
    <colgroup>
        <col class="col-package" />
        <col class="col-class" />
        <col class="col-description" />
    </colgroup>
    <tr>
        <th>Class</th>
        <th>Description</th>
    </tr>
<?php
ksort($types);
foreach ($types as $i => $class):
?>
    <tr>
        <td><?= $this->context->createTypeLink($class, $class, $class->name) ?></td>
        <td><?= \yii\apidoc\helpers\ApiMarkdown::process($class->shortDescription, $class, true) ?></td>
    </tr>
<?php endforeach; ?>
</table>
