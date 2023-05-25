<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost\instances;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the ECS instance that is created on the dedicated host.
     *
     * @example i-bp14ot0ykf8w13a1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 128************0
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @description The instance type of the ECS instance that is created on the dedicated host.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 0,1
     *
     * @var string
     */
    public $socketId;
    protected $_name = [
        'instanceId'      => 'InstanceId',
        'instanceOwnerId' => 'InstanceOwnerId',
        'instanceType'    => 'InstanceType',
        'socketId'        => 'SocketId',
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
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->socketId) {
            $res['SocketId'] = $this->socketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SocketId'])) {
            $model->socketId = $map['SocketId'];
        }

        return $model;
    }
}
