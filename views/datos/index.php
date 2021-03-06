<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'valor',
            'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
