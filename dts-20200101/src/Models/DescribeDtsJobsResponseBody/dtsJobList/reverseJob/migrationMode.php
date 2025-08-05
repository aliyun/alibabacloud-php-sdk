<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\reverseJob;

use AlibabaCloud\Dara\Model;

class migrationMode extends Model
{
    /**
     * @var bool
     */
    public $dataInitialization;

    /**
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @var bool
     */
    public $fullDataCheck;

    /**
     * @var bool
     */
    public $incDataCheck;

    /**
     * @var bool
     */
    public $structureDataCheck;

    /**
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataInitialization' => 'DataInitialization',
        'dataSynchronization' => 'DataSynchronization',
        'fullDataCheck' => 'FullDataCheck',
        'incDataCheck' => 'IncDataCheck',
        'structureDataCheck' => 'StructureDataCheck',
        'structureInitialization' => 'StructureInitialization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }

        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }

        if (null !== $this->fullDataCheck) {
            $res['FullDataCheck'] = $this->fullDataCheck;
        }

        if (null !== $this->incDataCheck) {
            $res['IncDataCheck'] = $this->incDataCheck;
        }

        if (null !== $this->structureDataCheck) {
            $res['StructureDataCheck'] = $this->structureDataCheck;
        }

        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
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
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }

        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }

        if (isset($map['FullDataCheck'])) {
            $model->fullDataCheck = $map['FullDataCheck'];
        }

        if (isset($map['IncDataCheck'])) {
            $model->incDataCheck = $map['IncDataCheck'];
        }

        if (isset($map['StructureDataCheck'])) {
            $model->structureDataCheck = $map['StructureDataCheck'];
        }

        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
