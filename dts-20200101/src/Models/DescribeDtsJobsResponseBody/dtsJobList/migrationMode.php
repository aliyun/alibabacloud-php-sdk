<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description Indicates whether full data migration or synchronization is performed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description Indicates whether incremental data migration or synchronization is performed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description Indicates whether full data verification is performed. Valid values:
     * -  **true**: yes
     * -  **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $fullDataCheck;

    /**
     * @description Indicates whether incremental data verification is performed. Valid values:
     * -  **true**: yes
     * -  **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $incDataCheck;

    /**
     * @var bool
     */
    public $structureDataCheck;

    /**
     * @description Indicates whether schema migration or schema synchronization is performed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
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

    public function validate() {}

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
        if (null !== $this->structureDataCheck) {
            $res['StructureDataCheck'] = $this->structureDataCheck;
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
        if (isset($map['StructureDataCheck'])) {
            $model->structureDataCheck = $map['StructureDataCheck'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
