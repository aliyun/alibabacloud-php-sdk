<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesResponseBody\instances;

use AlibabaCloud\Tea\Model;

class userVpc extends Model
{
    /**
     * @example eth0 | eth1
     *
     * @var string
     */
    public $defaultRoute;

    /**
     * @example ["192.168.0.1/24", "192.168.1.1/24"]
     *
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @example sg-xxxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-xxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-xxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'defaultRoute'    => 'DefaultRoute',
        'extendedCIDRs'   => 'ExtendedCIDRs',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
