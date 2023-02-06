<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTopologyResponseBody\topologys;

use AlibabaCloud\Tea\Model;

class topology extends Model
{
    /**
     * @description The ID of the host where the ECS instance is deployed. This parameter is encrypted and cannot match the ID of the instance. However, if the values of this parameter for different ECS instances are the same, the ECS instances are deployed on the same host.
     *
     * @example ZWNobyBo****
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The ID of the ECS instance.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'hostId'     => 'HostId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return topology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
