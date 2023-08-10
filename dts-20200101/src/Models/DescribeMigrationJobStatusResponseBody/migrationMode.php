<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description Indicates whether full data migration is performed. Valid values:
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
     * @description Indicates whether incremental data migration is performed. Valid values:
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
     * @description Indicates whether schema migration is performed. Valid values:
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
        'dataInitialization'      => 'dataInitialization',
        'dataSynchronization'     => 'dataSynchronization',
        'structureInitialization' => 'structureInitialization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitialization) {
            $res['dataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['dataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->structureInitialization) {
            $res['structureInitialization'] = $this->structureInitialization;
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
        if (isset($map['dataInitialization'])) {
            $model->dataInitialization = $map['dataInitialization'];
        }
        if (isset($map['dataSynchronization'])) {
            $model->dataSynchronization = $map['dataSynchronization'];
        }
        if (isset($map['structureInitialization'])) {
            $model->structureInitialization = $map['structureInitialization'];
        }

        return $model;
    }
}
