<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateSpaceWithOrderResponseBody extends Model
{
    /**
     * @example emas_EmasServerlessPost_public_cn-n8m2y7l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 222082414200***
     *
     * @var string
     */
    public $orderId;

    /**
     * @example C71E8AEA-D1C3-****-956F-C261B7A43E92
     *
     * @var string
     */
    public $requestId;

    /**
     * @example mp-1140a548-****-44ac-8bfb-a21c073f0d1a
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'orderId'    => 'OrderId',
        'requestId'  => 'RequestId',
        'spaceId'    => 'SpaceId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpaceWithOrderResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
