<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeStorageCapacityUnitsResponseBody\storageCapacityUnits\storageCapacityUnit;

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
        if (\is_array($this->storageCapacityUnit)) {
            Model::validateArray($this->storageCapacityUnit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageCapacityUnit) {
            if (\is_array($this->storageCapacityUnit)) {
                $res['StorageCapacityUnit'] = [];
                $n1 = 0;
                foreach ($this->storageCapacityUnit as $item1) {
                    $res['StorageCapacityUnit'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['StorageCapacityUnit'])) {
            if (!empty($map['StorageCapacityUnit'])) {
                $model->storageCapacityUnit = [];
                $n1 = 0;
                foreach ($map['StorageCapacityUnit'] as $item1) {
                    $model->storageCapacityUnit[$n1++] = storageCapacityUnit::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
