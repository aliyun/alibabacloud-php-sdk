<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponseBody;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageCapacityUnitIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageCapacityUnitId'])) {
            if (!empty($map['StorageCapacityUnitId'])) {
                $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
            }
        }

        return $model;
    }
}
