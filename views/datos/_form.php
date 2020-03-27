<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
