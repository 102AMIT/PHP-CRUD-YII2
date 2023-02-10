<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Samarth egov Project';
?>
<div class="site-index">
    <h1 class="display-4" style="font-weight: 700; color: lightgray;">Update Post!</h1>

    <div class="body-content">
        <?php
        $form = ActiveForm::begin()?>
        <div class="row">
            <div class = "form-group">
                <div class= "col-lg-6">
                    <?=$form->field($post,'title');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class = "form-group">
                <div class= "col-lg-6">
                    <?=$form->field($post,'description')->textarea(['rows'=>'6']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class = "form-group">
                <div class= "col-lg-6">
                    <?php $items = ['e-commerce'=>'e-commerce','CMS'=>'CMS','MVC'=>'MVC'];?>
                    <?=$form->field($post,'category')->dropDownList($items,['prompt'=>'Select']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class = "form-group">
                <div class= "col-lg-6">
                    <div class="col-lg-3" style="margin-top: 10px;">
                        <?= Html::submitButton('Update Post',['class'=>'btn btn-primary']);?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary' style="margin-top: 10px;">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php ActiveForm::end()?>
    </div>
</div>