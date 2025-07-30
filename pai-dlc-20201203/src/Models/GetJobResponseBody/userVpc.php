<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponseBody;

use AlibabaCloud\Tea\Model;

class userVpc extends Model
{
    /**
     * @description The default router. This parameter is valid only for general-purpose computing resources. Valid values:
     *
     * eth0: The default network interface is used to access the Internet through the public gateway. eth1: The user\\"s Elastic Network Interface is used to access the Internet through the private gateway.
     *
     * @var string
     */
    public $defaultRoute;

    /**
     * @description The extended CIDR block. Example: 192.168.0.1/24.
     *
     * @var string[]
     */
    public $extendedCidrs;

    /**
     * @description The security group ID.
     *
     * @example sg-abcdef****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The vSwitch ID.
     *
     * @example vs-abcdef****
     *
     * @var string
     */
    public $switchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-abcdef****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'defaultRoute' => 'DefaultRoute',
        'extendedCidrs' => 'ExtendedCidrs',
        'securityGroupId' => 'SecurityGroupId',
        'switchId' => 'SwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }
        if (null !== $this->extendedCidrs) {
            $res['ExtendedCidrs'] = $this->extendedCidrs;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultRoute'])) {
            $model->defaultRoute = $map['DefaultRoute'];
        }
        if (isset($map['ExtendedCidrs'])) {
            if (!empty($map['ExtendedCidrs'])) {
                $model->extendedCidrs = $map['ExtendedCidrs'];
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
