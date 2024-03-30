<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class SwitchNetworkRequest extends Model
{
    /**
     * @description The retention period of the classic network endpoint. Valid values: **14**, **30**, **60**, and **120**. Unit: days.
     *
     * >
     *
     *   This parameter is available and required only when the **RetainClassic** parameter is set to **True**.
     *
     *   After you complete the switchover operation, you can also call the [ModifyInstanceNetExpireTime](~~61010~~) operation to modify the retention period of the classic network endpoint.
     *
     * @example 30
     *
     * @var string
     */
    public $classicExpiredDays;

    /**
     * @description The ID of the instance. You can call the [DescribeInstances](~~60933~~) operation to query the ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to retain the original classic network endpoint after you switch the instance from classic network to VPC. Default value: False. Valid values:
     *
     *   **True**: retains the classic network endpoint.
     *   **False**: does not retain the classic network endpoint.
     *
     * > This parameter is available only when the network type of the instance is classic network.
     * @example True
     *
     * @var string
     */
    public $retainClassic;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The network type to which you want to switch. Set the value to **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $targetNetworkType;

    /**
     * @description The ID of the vSwitch that belongs to the VPC to which you want to switch. You can call the [DescribeVpcs](~~35739~~) operation to query the VPC ID.
     *
     * > The vSwitch and the ApsaraDB for Redis instance must be deployed in the same zone.
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC to which you want to switch. You can call the [DescribeVpcs](~~35739~~) operation to query the VPC ID.
     *
     * >
     *
     *   The VPC and the ApsaraDB for Redis instance must be deployed in the same region.
     *
     *   After you set this parameter, you must also set the **VSwitchId** parameter.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'classicExpiredDays'   => 'ClassicExpiredDays',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'retainClassic'        => 'RetainClassic',
        'securityToken'        => 'SecurityToken',
        'targetNetworkType'    => 'TargetNetworkType',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->targetNetworkType) {
            $res['TargetNetworkType'] = $this->targetNetworkType;
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
     * @return SwitchNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TargetNetworkType'])) {
            $model->targetNetworkType = $map['TargetNetworkType'];
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
