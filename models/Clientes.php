<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $idCliente
 * @property string $nomeEmpresa
 * @property string $nomeDiretor
 * @property integer $numEmpregados
 */
class Clientes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numEmpregados'], 'integer'],
            [['nomeEmpresa', 'nomeDiretor'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCliente' => 'Id Cliente',
            'nomeEmpresa' => 'Nome Empresa',
            'nomeDiretor' => 'Nome Diretor',
            'numEmpregados' => 'Num Empregados',
        ];
    }
}
