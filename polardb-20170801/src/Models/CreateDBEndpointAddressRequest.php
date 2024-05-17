<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBEndpointAddressRequest\zoneInfo;
use AlibabaCloud\Tea\Model;

class CreateDBEndpointAddressRequest extends Model
{
    /**
     * @description The prefix of the new endpoint. The prefix of the endpoint must meet the following requirements:
     *
     *   The prefix can contain lowercase letters, digits, and hyphens (-).
     *   The prefix must start with a letter and end with a digit or a letter.
     *   The prefix must be 6 to 40 characters in length.
     *
     * @example test-1
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-**************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the endpoint.
     *
     * This parameter is required.
     * @example pe-**************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The network type of the endpoint. Set the value to **Public**.
     *
     * This parameter is required.
     * @example Public
     *
     * @var string
     */
    public $netType;

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
     * @description The ID of the ECS security group.
     *
     * @example sg-bp**************
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The details of the zones.
     *
     * @var zoneInfo[]
     */
    public $zoneInfo;
    protected $_name = [
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'DBClusterId'            => 'DBClusterId',
        'DBEndpointId'           => 'DBEndpointId',
        'netType'                => 'NetType',
        'ownerAccount'           => 'OwnerAccount',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'securityGroupId'        => 'SecurityGroupId',
        'VPCId'                  => 'VPCId',
        'zoneInfo'               => 'ZoneInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->zoneInfo) {
            $res['ZoneInfo'] = [];
            if (null !== $this->zoneInfo && \is_array($this->zoneInfo)) {
                $n = 0;
                foreach ($this->zoneInfo as $item) {
                    $res['ZoneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBEndpointAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['ZoneInfo'])) {
            if (!empty($map['ZoneInfo'])) {
                $model->zoneInfo = [];
                $n               = 0;
                foreach ($map['ZoneInfo'] as $item) {
                    $model->zoneInfo[$n++] = null !== $item ? zoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
