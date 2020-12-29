<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponseBody\storageCapacityUnitIds;
use AlibabaCloud\Tea\Model;

class PurchaseStorageCapacityUnitResponseBody extends Model
{
    /**
     * @var storageCapacityUnitIds
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
            $res['StorageCapacityUnitIds'] = null !== $this->storageCapacityUnitIds ? $this->storageCapacityUnitIds->toMap() : null;
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
            $model->storageCapacityUnitIds = storageCapacityUnitIds::fromMap($map['StorageCapacityUnitIds']);
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
