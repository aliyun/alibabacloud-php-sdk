<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Dara\Model;

class migrationMode extends Model
{
    /**
     * @var bool
     */
    public $dataIntialization;

    /**
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @var bool
     */
    public $structureIntialization;
    protected $_name = [
        'dataIntialization' => 'DataIntialization',
        'dataSynchronization' => 'DataSynchronization',
        'structureIntialization' => 'StructureIntialization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIntialization) {
            $res['DataIntialization'] = $this->dataIntialization;
        }

        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }

        if (null !== $this->structureIntialization) {
            $res['StructureIntialization'] = $this->structureIntialization;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataIntialization'])) {
            $model->dataIntialization = $map['DataIntialization'];
        }

        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }

        if (isset($map['StructureIntialization'])) {
            $model->structureIntialization = $map['StructureIntialization'];
        }

        return $model;
    }
}
