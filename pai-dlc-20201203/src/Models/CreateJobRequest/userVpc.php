<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class userVpc extends Model
{
    /**
     * @description The default route. Default value: false. Valid values:
     *
     *   eth0: The default network interface is used to access the Internet through the public gateway.
     *   eth1: The user\\"s elastic network interface (ENI) is used to access the Internet through the private gateway. For more information about the configuration method, see [Enable Internet access for a DSW instance by using a private Internet NAT gateway](https://help.aliyun.com/document_detail/2525343.html).
     *
     * @example eth0
     *
     * @var string
     */
    public $defaultRoute;

    /**
     * @description The extended CIDR block.
     *
     *   If you leave the SwitchId and ExtendedCIDRs parameters empty, the system automatically obtains all CIDR blocks in a VPC.
     *   If you configure the SwitchId and ExtendedCIDRs parameters, we recommend that you specify all CIDR blocks in a VPC.
     *
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @description The ID of the security group.
     *
     * @example sg-abcdef****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The vSwitch ID. This parameter is optional.
     *
     *   If you leave this parameter empty, the system automatically selects a vSwitch based on the inventory status.
     *   You can also specify a vSwitch ID.
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
        'extendedCIDRs' => 'ExtendedCIDRs',
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
        if (null !== $this->extendedCIDRs) {
            $res['ExtendedCIDRs'] = $this->extendedCIDRs;
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
        if (isset($map['ExtendedCIDRs'])) {
            if (!empty($map['ExtendedCIDRs'])) {
                $model->extendedCIDRs = $map['ExtendedCIDRs'];
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
