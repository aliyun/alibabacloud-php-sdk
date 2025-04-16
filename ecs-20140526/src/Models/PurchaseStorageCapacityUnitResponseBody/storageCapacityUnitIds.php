<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponseBody;

use AlibabaCloud\Dara\Model;

class storageCapacityUnitIds extends Model
{
    /**
     * @var string[]
     */
    public $storageCapacityUnitId;
    protected $_name = [
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
    ];

    public function validate()
    {
        if (\is_array($this->storageCapacityUnitId)) {
            Model::validateArray($this->storageCapacityUnitId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageCapacityUnitId) {
            if (\is_array($this->storageCapacityUnitId)) {
                $res['StorageCapacityUnitId'] = [];
                $n1 = 0;
                foreach ($this->storageCapacityUnitId as $item1) {
                    $res['StorageCapacityUnitId'][$n1++] = $item1;
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
        if (isset($map['StorageCapacityUnitId'])) {
            if (!empty($map['StorageCapacityUnitId'])) {
                $model->storageCapacityUnitId = [];
                $n1 = 0;
                foreach ($map['StorageCapacityUnitId'] as $item1) {
                    $model->storageCapacityUnitId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
