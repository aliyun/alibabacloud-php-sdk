<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\reverseJob;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description Indicates whether data transformation is performed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $dataExtractTransformLoad;

    /**
     * @description Indicates whether full data migration or initial full data synchronization is performed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description Indicates whether incremental data migration or synchronization is performed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description Indicates whether schema migration or initial schema synchronization is performed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataExtractTransformLoad' => 'DataExtractTransformLoad',
        'dataInitialization'       => 'DataInitialization',
        'dataSynchronization'      => 'DataSynchronization',
        'structureInitialization'  => 'StructureInitialization',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return migrationMode
     */
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
