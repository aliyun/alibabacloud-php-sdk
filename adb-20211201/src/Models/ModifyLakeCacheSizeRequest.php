<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyLakeCacheSizeRequest extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $enableLakeCache;
    protected $_name = [
        'capacity' => 'Capacity',
        'DBClusterId' => 'DBClusterId',
        'enableLakeCache' => 'EnableLakeCache',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
