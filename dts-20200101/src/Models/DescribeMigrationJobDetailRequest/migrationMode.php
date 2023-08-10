<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailRequest;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description Specifies whether to query the details of full data migration. Valid values:
     *
     *   **true**: yes
     *
     *   **false**: no
     *
     * > Default value: **false**
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description Specifies whether to query the details of incremental data migration. Valid values:
     *
     *   **true**: yes
     *
     *   **false**: no
     *
     * > Default value: **false**
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description Specifies whether to query the details of schema migration. Valid values:
     *
     *   **true**: yes
     *
     *   **false**: no
     *
     * > Default value: **false**
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataInitialization'      => 'DataInitialization',
        'dataSynchronization'     => 'DataSynchronization',
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
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
