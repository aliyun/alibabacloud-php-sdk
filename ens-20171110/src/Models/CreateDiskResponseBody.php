<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskResponseBody extends Model
{
    /**
     * @description IDs of instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the order. Multiple IDs are separated by commas (,).
     *
     * >  This parameter is not returned for the pay-as-you-go billing method.
     * @example 21127020370****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 7030AB96-57CF-1C68-9FEE-D60E547FD79C
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
     * @return CreateDiskResponseBody
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
