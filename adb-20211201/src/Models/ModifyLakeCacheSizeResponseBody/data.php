<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyLakeCacheSizeResponseBody;

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
     * @example 100
     *
     * @var int
     */
    public $dataSize;

    /**
     * @var string[]
     */
    public $instances;
    protected $_name = [
        'capacity'  => 'Capacity',
        'dataSize'  => 'DataSize',
        'instances' => 'Instances',
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
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
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
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = $map['Instances'];
            }
        }

        return $model;
    }
}
