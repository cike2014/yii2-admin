<?php

use Yii;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model jinxing\admin\models\LoginForm */

$this->title                   = Yii::t('admin', 'Login');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(); ?>
<fieldset>
    <label class="block clearfix">
        <span class="block input-icon input-icon-right">
            <?= $form->field($model, 'username')
                ->textInput(['placeholder' => Yii::t('admin', 'loginUsernamePlaceholder')])
                ->label(false) ?>
            <i class="ace-icon fa fa-user"></i>
        </span>
    </label>

    <label class="block clearfix">
        <span class="block input-icon input-icon-right">
            <?= $form->field($model, 'password')
                ->passwordInput(['placeholder' => Yii::t('admin', 'loginPasswordPlaceholder')])
                ->label(false) ?>
            <i class="ace-icon fa fa-lock"></i>
        </span>
    </label>
    <div class="space"></div>
    <div class="clearfix">
        <label class="inline">
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
        </label>
        <?= Html::submitButton('登录', ['class' => 'btn bg-olive btn-block width-35 pull-right btn btn-sm btn-primary']) ?>
    </div>
    <div class="space-4"></div>
</fieldset>
<?php ActiveForm::end(); ?>
