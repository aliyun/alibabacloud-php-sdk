<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\reverseJob;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description Indicates whether initial full data synchronization is performed. Valid values:
     *
     * -  **true**
     * -  **false**
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description Indicates whether incremental data synchronization is performed. Valid values:
     * -  **true**
     * -  **false**
     * @example true
     *
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
     * @description Indicates whether initial schema synchronization is performed. Valid values:
     * -  **true**
     * -  **false**
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataInitialization'      => 'DataInitialization',
        'dataSynchronization'     => 'DataSynchronization',
        'fullDataCheck'           => 'FullDataCheck',
        'incDataCheck'            => 'IncDataCheck',
        'structureInitialization' => 'StructureInitialization',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
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
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
