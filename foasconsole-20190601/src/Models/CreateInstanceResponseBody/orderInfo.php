<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class orderInfo extends Model
{
    /**
     * @example 8D2D5BBF-C302-1A21-80E1-27799802****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 210406354694567
     *
     * @var int
     */
    public $orderId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId'    => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
