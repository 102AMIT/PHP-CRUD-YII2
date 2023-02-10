<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Samarth egov Project';
?>
<div class="site-index">
    <h1 class="display-4" style="font-weight: 700; color: lightgray;">View Post!</h1>

    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->title;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $post->description;?>
                
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $post->category;?>
                
            </li>
        </ul>
        <div class="row">
            <a href=<?php echo yii::$app->homeUrl;?> class='btn btn-primary' style="margin-top: 20px; width: 200px; margin-left: 15px;">Go Back</a>
        </div>
    </div>
</div>