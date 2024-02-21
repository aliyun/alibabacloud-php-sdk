<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class storage extends Model
{
    /**
     * @description The average storage usage threshold that triggers automatic storage expansion. Unit: %.
     *
     * @example 70
     *
     * @var int
     */
    public $diskUsageUpperThreshold;

    /**
     * @description The maximum storage size. Unit: GB.
     *
     * @example 32000
     *
     * @var int
     */
    public $maxStorage;

    /**
     * @description Indicates whether the automatic storage expansion feature is enabled. Valid values:
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
