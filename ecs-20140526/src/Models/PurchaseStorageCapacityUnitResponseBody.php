<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseStorageCapacityUnitResponseBody\storageCapacityUnitIds;

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
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
        'storageCapacityUnitIds' => 'StorageCapacityUnitIds',
    ];

    public function validate()
    {
        if (null !== $this->storageCapacityUnitIds) {
            $this->storageCapacityUnitIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageCapacityUnitIds) {
            $res['StorageCapacityUnitIds'] = null !== $this->storageCapacityUnitIds ? $this->storageCapacityUnitIds->toArray($noStream) : $this->storageCapacityUnitIds;
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
