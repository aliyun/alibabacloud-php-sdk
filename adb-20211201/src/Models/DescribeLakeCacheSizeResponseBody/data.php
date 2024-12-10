<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeLakeCacheSizeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $capacity;

    /**
     * @example amv-bp10b6646l07akdt
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 100
     *
     * @var int
     */
    public $dataSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableLakeCache;

    /**
     * @var string[]
     */
    public $instances;
    protected $_name = [
        'capacity'        => 'Capacity',
        'DBClusterId'     => 'DBClusterId',
        'dataSize'        => 'DataSize',
        'enableLakeCache' => 'EnableLakeCache',
        'instances'       => 'Instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->enableLakeCache) {
            $res['EnableLakeCache'] = $this->enableLakeCache;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['EnableLakeCache'])) {
            $model->enableLakeCache = $map['EnableLakeCache'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = $map['Instances'];
            }
        }

        return $model;
    }
}
