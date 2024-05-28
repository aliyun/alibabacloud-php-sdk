<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;

use AlibabaCloud\Tea\Model;

class vpcInfo extends Model
{
    /**
     * @description The ID of the security group to which the instance belongs.
     *
     * @example sg-bp17hpmgz96tvnsdy6so
     *
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description The ID of the vSwitch with which you want to associate the instance, If there are multiple vSwitchs, please concatenate them using the "|" character.
     *
     * This parameter is required.
     * @example vsw-uf6gwtbn6etadpv*******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC in which you want to deploy the instance.
     *
     * This parameter is required.
     * @example vpc-wz9qt50xhtj9krb******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupIds' => 'securityGroupIds',
        'vSwitchId'        => 'vSwitchId',
        'vpcId'            => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupIds) {
            $res['securityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['securityGroupIds'])) {
            $model->securityGroupIds = $map['securityGroupIds'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
