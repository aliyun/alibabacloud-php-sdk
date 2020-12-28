<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class PurchaseStorageCapacityUnitResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $storageCapacityUnitIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'storageCapacityUnitIds' => 'StorageCapacityUnitIds',
        'requestId'              => 'RequestId',
        'orderId'                => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageCapacityUnitIds) {
            $res['StorageCapacityUnitIds'] = $this->storageCapacityUnitIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseStorageCapacityUnitResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageCapacityUnitIds'])) {
            if (!empty($map['StorageCapacityUnitIds'])) {
                $model->storageCapacityUnitIds = $map['StorageCapacityUnitIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
