<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class orderInfo extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $storageInstanceId;

    /**
     * @var int
     */
    public $storageOrderId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
        'storageInstanceId' => 'StorageInstanceId',
        'storageOrderId' => 'StorageOrderId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->storageInstanceId) {
            $res['StorageInstanceId'] = $this->storageInstanceId;
        }

        if (null !== $this->storageOrderId) {
            $res['StorageOrderId'] = $this->storageOrderId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['StorageInstanceId'])) {
            $model->storageInstanceId = $map['StorageInstanceId'];
        }

        if (isset($map['StorageOrderId'])) {
            $model->storageOrderId = $map['StorageOrderId'];
        }

        return $model;
    }
}
