<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponseBody\storageCapacityUnitIds;
use AlibabaCloud\Tea\Model;

class PurchaseStorageCapacityUnitResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageCapacityUnitIds
     */
    public $storageCapacityUnitIds;
    protected $_name = [
        'orderId'                => 'OrderId',
        'requestId'              => 'RequestId',
        'storageCapacityUnitIds' => 'StorageCapacityUnitIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageCapacityUnitIds) {
            $res['StorageCapacityUnitIds'] = null !== $this->storageCapacityUnitIds ? $this->storageCapacityUnitIds->toMap() : null;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageCapacityUnitIds'])) {
            $model->storageCapacityUnitIds = storageCapacityUnitIds::fromMap($map['StorageCapacityUnitIds']);
        }

        return $model;
    }
}
