<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedBlockStorageClusterResponseBody extends Model
{
    /**
     * @description The ID of the dedicated block storage cluster.
     *
     * @example dbsc-f8z4d3k4nsgg9okb****
     *
     * @var string
     */
    public $dbscId;

    /**
     * @description The ID of the order.
     *
     * @example 50155660025****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The ID of the request.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbscId'    => 'DbscId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbscId) {
            $res['DbscId'] = $this->dbscId;
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
     * @return CreateDedicatedBlockStorageClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbscId'])) {
            $model->dbscId = $map['DbscId'];
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
