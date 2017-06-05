<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'NCrops';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
           
            <h1>Crops Index</h1> 
              <h1><?=$title ?></h1> 
              <h3><?=$comment ?></h3>  
              <?php
              $arrayB = null; 
              foreach ($arrayA as  $key => $value) {
                  echo $key."------".$value."<br>";
              }
              
              ?>
              
              
        </div>
      
        </div>
</div>
