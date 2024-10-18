<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetClusterResponseBody\manager;

use AlibabaCloud\Tea\Model;

class managerNode extends Model
{
    /**
     * @description The expiration time of the management node.
     *
     * @example 2099-12-31T15:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The instance billing method of the management node. Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance ID of the management node.
     *
     * @example i-bp1a170jgea1vl******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance type of the management node.
     *
     * @example ecs.g6.4xlarge
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'expiredTime'        => 'ExpiredTime',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId'         => 'InstanceId',
        'instanceType'       => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return managerNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
