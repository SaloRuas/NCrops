<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'NCrops';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
           

            <?php $form = ActiveForm::begin(['action' =>['site/add'], 'id' => 'rent_post', 'method' => 'post',]); ?>

            <div class="col-lg-4"> 
                <?=$form->field($model, 'client_id')->dropDownList(
                    $items,           // Flat array ('id'=>'label')
                    ['prompt'=>'Select Client','class'=>'form-control'] );
                ?>

            </div>    

            <div class="col-lg-4">
                <?= $form->field($model, 'address')->textInput() ?>
            </div>

            <div class="col-lg-4">
                <?= $form->field($model, 'value')->textInput() ?>
            </div>
            
        </div>
          <div class="row">
          <div class="col-lg-4">
                <br>
                <br>
                <?= Html::submitButton('Add', ['class' => 'btn btn-danger']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        </div>
    </div>

    <div class="container">
        <h3>Property List</h3>            
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Address</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($rents as $rent) {
                    echo' <tr>
                            <td>'.$rent->client->name.'</td>
                            <td>'.$rent->address.'</td>
                             <td>'.$rent->value.'</td></tr> ';    
                }?>
        </tbody>
    </table>
    </div>
</div>
