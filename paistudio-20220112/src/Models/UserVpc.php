<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UserVpc extends Model
{
    /**
     * @var string
     */
    public $defaultRoute;

    /**
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'defaultRoute'    => 'DefaultRoute',
        'extendedCIDRs'   => 'ExtendedCIDRs',
        'roleArn'         => 'RoleArn',
        'securityGroupId' => 'SecurityGroupId',
        'switchId'        => 'SwitchId',
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
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
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
     * @return UserVpc
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
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
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
