<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;

use AlibabaCloud\Dara\Model;

class migrationMode extends Model
{
    /**
     * @var bool
     */
    public $dataExtractTransformLoad;

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
    public $structureInitialization;
    protected $_name = [
        'dataExtractTransformLoad' => 'DataExtractTransformLoad',
        'dataInitialization' => 'DataInitialization',
        'dataSynchronization' => 'DataSynchronization',
        'structureInitialization' => 'StructureInitialization',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataExtractTransformLoad) {
            $res['DataExtractTransformLoad'] = $this->dataExtractTransformLoad;
        }

        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }

        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
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
        if (isset($map['DataExtractTransformLoad'])) {
            $model->dataExtractTransformLoad = $map['DataExtractTransformLoad'];
        }

        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }

        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }

        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
