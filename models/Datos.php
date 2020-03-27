<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Datos".
 *
 * @property int $id
 * @property int $valor
 * @property string $fecha
 */
class Datos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Datos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor'], 'required'],
            [['valor'], 'integer'],
            [['fecha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valor' => 'Valor',
            'fecha' => 'Fecha',
        ];
    }
}
