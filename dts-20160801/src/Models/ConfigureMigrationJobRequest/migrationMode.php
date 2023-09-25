<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\ConfigureMigrationJobRequest;

use AlibabaCloud\Tea\Model;

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
        'dataIntialization'      => 'DataIntialization',
        'dataSynchronization'    => 'DataSynchronization',
        'structureIntialization' => 'StructureIntialization',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return migrationMode
     */
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
