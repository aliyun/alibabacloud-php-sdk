<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceRequest;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\BandwidthLimit;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfo;
use AlibabaCloud\Tea\Model;

class userVpc extends Model
{
    /**
     * @var BandwidthLimit
     */
    public $bandwidthLimit;

    /**
     * @description The default route. Valid values:
     *
     *   eth0: The default network interface is used to access the Internet through the public gateway.
     *   eth1: The user\\"s Elastic Network Interface is used to access the Internet through the private gateway.
     *
     * @example eth0
     *
     * @var string
     */
    public $defaultRoute;

    /**
     * @description The extended CIDR blocks.
     *
     *   If you leave VSwitchId empty, this parameter is not required and the system automatically obtains all CIDR blocks in the VPC.
     *   If VSwitchId is not empty, this parameter is required. Specify all CIDR blocks in the VPC.
     *
     * @example ["192.168.0.1/24", "192.168.1.1/24"]
     *
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @description The forward configuration of the instance.
     *
     * @var ForwardInfo[]
     */
    public $forwardInfos;

    /**
     * @description The security group ID.
     *
     * @example sg-xxxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-xxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bandwidthLimit' => 'BandwidthLimit',
        'defaultRoute' => 'DefaultRoute',
        'extendedCIDRs' => 'ExtendedCIDRs',
        'forwardInfos' => 'ForwardInfos',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = null !== $this->bandwidthLimit ? $this->bandwidthLimit->toMap() : null;
        }
        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }
        if (null !== $this->extendedCIDRs) {
            $res['ExtendedCIDRs'] = $this->extendedCIDRs;
        }
        if (null !== $this->forwardInfos) {
            $res['ForwardInfos'] = [];
            if (null !== $this->forwardInfos && \is_array($this->forwardInfos)) {
                $n = 0;
                foreach ($this->forwardInfos as $item) {
                    $res['ForwardInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = BandwidthLimit::fromMap($map['BandwidthLimit']);
        }
        if (isset($map['DefaultRoute'])) {
            $model->defaultRoute = $map['DefaultRoute'];
        }
        if (isset($map['ExtendedCIDRs'])) {
            if (!empty($map['ExtendedCIDRs'])) {
                $model->extendedCIDRs = $map['ExtendedCIDRs'];
            }
        }
        if (isset($map['ForwardInfos'])) {
            if (!empty($map['ForwardInfos'])) {
                $model->forwardInfos = [];
                $n = 0;
                foreach ($map['ForwardInfos'] as $item) {
                    $model->forwardInfos[$n++] = null !== $item ? ForwardInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
