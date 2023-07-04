<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionSetupOrderResponseBody extends Model
{
    /**
     * @description The ID of the order.
     *
     * @example 202844382740728
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-2zegmc02v7ss4****
     *
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @description The ID of the request.
     *
     * @example F7A6301A-64BA-41EC-8284-8F4838C15D1F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderId'              => 'OrderId',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'requestId'            => 'RequestId',
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
        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalConnectionSetupOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
