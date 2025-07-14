<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceVpcAttributeRequest extends Model
{
    /**
     * @description The ID of the ECS instance.
     *
     * >  When you call this operation, the ECS instance must be in the **Stopped** (`Stopped`) state. For other limits on the ECS instance, see the **Usage notes** section of this topic.
     *
     * This parameter is required.
     *
     * @example i-bp1iudwa5b1tqag1****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The new private IP address of the ECS instance.
     *
     * >  The value of `PrivateIpAddress` depends on the value of `VSwitchId`. The specified IP address must be within the CIDR block of the specified vSwitch.
     *
     * By default, if this parameter is empty, a private IP address is randomly assigned from the CIDR block of the specified vSwitch.
     *
     * @example ``172.17.**.**``
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IDs of new security groups to which the ECS instance belongs after the VPC is changed. This parameter is required only if `VpcId` is specified.
     *
     *   The security groups that you specify must belong to the new VPC.
     *   You can specify one or more security groups. The valid values of N vary based on the maximum number of security groups to which an ECS instance can belong. For more information, see [Limits](~~25412#SecurityGroupQuota1~~).
     *   The specified security groups must be of the same type.
     *   You can switch the ECS instance to security groups of a different type. To ensure network connectivity, we recommend that you understand the differences in rule configurations of the two security group types before you switch the ECS instance to security groups of a different type. For more information, see [Overview of security groups](https://help.aliyun.com/document_detail/25387.html).
     *
     * @example sg-o6w9l8bc8dgmkw87****
     *
     * @var string[]
     */
    public $securityGroupId;

    /**
     * @description The ID of the new vSwitch.
     *
     *   If you set this parameter to the ID of the current vSwitch, the vSwitch of the ECS instance remains unchanged.
     *   If you set this parameter to the ID of a different vSwitch and leave `VpcId` empty, the new vSwitch must belong to the same zone and VPC as the current vSwitch.
     *   If you specify `VpcId`, the vSwitch specified by this parameter must belong to the specified VPC and the same zone as the current vSwitch.
     *
     * This parameter is required.
     *
     * @example vsw-bp1s5fnvk4gn3tw12****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the new VPC.
     *
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'privateIpAddress' => 'PrivateIpAddress',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
     * @return ModifyInstanceVpcAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = $map['SecurityGroupId'];
            }
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
