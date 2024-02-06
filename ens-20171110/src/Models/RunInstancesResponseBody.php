<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RunInstancesResponseBody extends Model
{
    /**
     * @description The IDs of instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The order ID.
     *
     * @example 213177957850399
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 91E4AFBE-4E35-5D2A-A886-BB477C9953D2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'orderId'     => 'OrderId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
