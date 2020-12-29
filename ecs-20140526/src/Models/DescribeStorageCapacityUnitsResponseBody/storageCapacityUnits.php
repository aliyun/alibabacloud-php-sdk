<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody\storageCapacityUnits\storageCapacityUnit;
use AlibabaCloud\Tea\Model;

class storageCapacityUnits extends Model
{
    /**
     * @var storageCapacityUnit[]
     */
    public $storageCapacityUnit;
    protected $_name = [
        'storageCapacityUnit' => 'StorageCapacityUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageCapacityUnit) {
            $res['StorageCapacityUnit'] = [];
            if (null !== $this->storageCapacityUnit && \is_array($this->storageCapacityUnit)) {
                $n = 0;
                foreach ($this->storageCapacityUnit as $item) {
                    $res['StorageCapacityUnit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageCapacityUnit'])) {
            if (!empty($map['StorageCapacityUnit'])) {
                $model->storageCapacityUnit = [];
                $n                          = 0;
                foreach ($map['StorageCapacityUnit'] as $item) {
                    $model->storageCapacityUnit[$n++] = null !== $item ? storageCapacityUnit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
