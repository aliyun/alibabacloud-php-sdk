<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AttachNetworkInterfaceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example i-bp16qstyvxj9gpqw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The index of the network interface controller (NIC).
     *
     * > The value of this parameter varies based on the instance family of the specified instance. If the instance type of the specified instance does not support NICs, leave this parameter empty. If the instance type of the specified instance supports NICs, set this parameter to a valid value. For information about the valid values of this parameter, see [Instance families](~~25378~~).
     * @example 0
     *
     * @var int
     */
    public $networkCardIndex;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-bp17pdijfczax1huji****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the trunk ENI.
     *
     * > This parameter is unavailable.
     * @example eni-f8zapqwj1v1j4ia3****
     *
     * @var string
     */
    public $trunkNetworkInstanceId;

    /**
     * @description > This parameter is no longer supported.
     *
     * @example null
     *
     * @var bool
     */
    public $waitForNetworkConfigurationReady;
    protected $_name = [
        'instanceId'                       => 'InstanceId',
        'networkCardIndex'                 => 'NetworkCardIndex',
        'networkInterfaceId'               => 'NetworkInterfaceId',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'regionId'                         => 'RegionId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'trunkNetworkInstanceId'           => 'TrunkNetworkInstanceId',
        'waitForNetworkConfigurationReady' => 'WaitForNetworkConfigurationReady',
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
        if (null !== $this->networkCardIndex) {
            $res['NetworkCardIndex'] = $this->networkCardIndex;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->trunkNetworkInstanceId) {
            $res['TrunkNetworkInstanceId'] = $this->trunkNetworkInstanceId;
        }
        if (null !== $this->waitForNetworkConfigurationReady) {
            $res['WaitForNetworkConfigurationReady'] = $this->waitForNetworkConfigurationReady;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkCardIndex'])) {
            $model->networkCardIndex = $map['NetworkCardIndex'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TrunkNetworkInstanceId'])) {
            $model->trunkNetworkInstanceId = $map['TrunkNetworkInstanceId'];
        }
        if (isset($map['WaitForNetworkConfigurationReady'])) {
            $model->waitForNetworkConfigurationReady = $map['WaitForNetworkConfigurationReady'];
        }

        return $model;
    }
}
