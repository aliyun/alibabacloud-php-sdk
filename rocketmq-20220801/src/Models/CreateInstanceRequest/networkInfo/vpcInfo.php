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
     * @description The ID of the vSwitch with which you want to associate the instance.
     *
     * >  After an ApsaraMQ for RocketMQ instance is created, you cannot change the vSwitch with which the instance is associated. If you want to change the vSwitch with which the instance is associated, you must release the instance and purchase a new instance.
     * @example vsw-uf6gwtbn6etadpv*******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC in which you want to deploy the instance.
     *
     * >  After an ApsaraMQ for RocketMQ instance is created, you cannot change the VPC in which the instance is deployed. If you want to change the VPC in which the instance is deployed, you must release the instance and create a new instance.
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
