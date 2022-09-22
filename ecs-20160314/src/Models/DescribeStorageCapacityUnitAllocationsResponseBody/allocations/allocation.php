<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeStorageCapacityUnitAllocationsResponseBody\allocations;

use AlibabaCloud\Tea\Model;

class allocation extends Model
{
    /**
     * @var string
     */
    public $beAllocatedAccountId;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $storageCapacityUnitId;
    protected $_name = [
        'beAllocatedAccountId'  => 'BeAllocatedAccountId',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'storageCapacityUnitId' => 'StorageCapacityUnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beAllocatedAccountId) {
            $res['BeAllocatedAccountId'] = $this->beAllocatedAccountId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageCapacityUnitId) {
            $res['StorageCapacityUnitId'] = $this->storageCapacityUnitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeAllocatedAccountId'])) {
            $model->beAllocatedAccountId = $map['BeAllocatedAccountId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageCapacityUnitId'])) {
            $model->storageCapacityUnitId = $map['StorageCapacityUnitId'];
        }

        return $model;
    }
}
