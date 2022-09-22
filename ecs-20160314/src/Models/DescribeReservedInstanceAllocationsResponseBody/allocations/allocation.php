<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservedInstanceAllocationsResponseBody\allocations;

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
    public $reservedInstanceId;

    /**
     * @var string
     */
    public $resourceOwnerId;
    protected $_name = [
        'beAllocatedAccountId' => 'BeAllocatedAccountId',
        'reservedInstanceId'   => 'ReservedInstanceId',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
