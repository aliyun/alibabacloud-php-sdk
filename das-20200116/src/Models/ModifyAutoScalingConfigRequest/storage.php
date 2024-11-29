<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @description Specifies whether to apply the **Storage** configuration of the automatic storage expansion feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $apply;

    /**
     * @description The average storage usage threshold that triggers automatic storage expansion. Unit: %. Valid values:
     *
     *   **50**
     *   **60**
     *   **70**
     *   **80**
     *   **90**
     *
     * @example 70
     *
     * @var int
     */
    public $diskUsageUpperThreshold;

    /**
     * @description The maximum storage size of the database instance. Unit: GB. The value must be greater than or equal to the total storage size of the instance.
     *
     *   If the instance uses ESSDs, the maximum value of this parameter can be 32000.
     *   If the instance uses standard SSDs, the maximum value of this parameter can be 6000.
     *
     * >  The standard SSD storage type is phased out. We recommend that you [upgrade the storage type of your instance from standard SSDs to ESSDs](https://help.aliyun.com/document_detail/314678.html).
     * @example 32000
     *
     * @var int
     */
    public $maxStorage;

    /**
     * @description Specifies whether to enable automatic storage expansion. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $upgrade;
    protected $_name = [
        'apply'                   => 'Apply',
        'diskUsageUpperThreshold' => 'DiskUsageUpperThreshold',
        'maxStorage'              => 'MaxStorage',
        'upgrade'                 => 'Upgrade',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apply) {
            $res['Apply'] = $this->apply;
        }
        if (null !== $this->diskUsageUpperThreshold) {
            $res['DiskUsageUpperThreshold'] = $this->diskUsageUpperThreshold;
        }
        if (null !== $this->maxStorage) {
            $res['MaxStorage'] = $this->maxStorage;
        }
        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }
        if (isset($map['DiskUsageUpperThreshold'])) {
            $model->diskUsageUpperThreshold = $map['DiskUsageUpperThreshold'];
        }
        if (isset($map['MaxStorage'])) {
            $model->maxStorage = $map['MaxStorage'];
        }
        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        return $model;
    }
}
