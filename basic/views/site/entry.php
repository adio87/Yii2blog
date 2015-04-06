<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name')->label('Ваше имя:') ?>

<?= $form->field($model, 'email')->label('Ваш адресс эл.почты:') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class'=>'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
