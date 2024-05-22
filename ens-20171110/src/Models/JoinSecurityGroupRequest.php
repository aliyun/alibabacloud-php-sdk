<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class JoinSecurityGroupRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-58z57orgmt6d1****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The ID of the security group.
     *
     * This parameter is required.
     * @example sg-bp67acfmxazb4ph***
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'securityGroupId'    => 'SecurityGroupId',
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
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinSecurityGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
