<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyLakeCacheSizeRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $capacity;

    /**
     * @description This parameter is required.
     *
     * @example amv-bp10yt0gva71ei7d
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableLakeCache;
    protected $_name = [
        'capacity'        => 'Capacity',
        'DBClusterId'     => 'DBClusterId',
        'enableLakeCache' => 'EnableLakeCache',
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
        if (null !== $this->enableLakeCache) {
            $res['EnableLakeCache'] = $this->enableLakeCache;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLakeCacheSizeRequest
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
        if (isset($map['EnableLakeCache'])) {
            $model->enableLakeCache = $map['EnableLakeCache'];
        }

        return $model;
    }
}
