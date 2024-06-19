<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class SwitchInstanceHARequest extends Model
{
    /**
     * @description The ID of the instance. You can call the [DescribeInstances](https://help.aliyun.com/document_detail/60933.html) operation to query the ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data shard. You can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/190794.html) operation to obtain the value of the CustinsId parameter. Separate multiple data shard IDs with commas (,). `all` indicates that all data shards are specified.
     *
     * > This parameter is available and required only for read/write splitting and cluster instances.
     * @example 56****19,56****20
     *
     * @var string
     */
    public $nodeId;

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
     * @var string
     */
    public $securityToken;

    /**
     * @description The time when to perform the switchover. Default value: 0. Valid values:
     *
     *   **0**: immediately performs the switchover.
     *   **1**: performs the switchover during the maintenance window.
     *
     * > You can call the [ModifyInstanceMaintainTime](https://help.aliyun.com/document_detail/61000.html) operation to modify the maintenance window of an ApsaraDB for Redis instance.
     * @example 0
     *
     * @var int
     */
    public $switchMode;

    /**
     * @description The switching mode. Valid values:
     *
     *   **AvailablePriority**: prioritizes the availability and performs a switchover immediately without considering the latency of data synchronization between the master and replica nodes. This may cause data loss.
     *   **ReliabilityPriority**: prioritizes the reliability and performs a switchover after no latency of data synchronization between the master and replica nodes exists. This ensures data integrity. This mode may cause a switchover failure in scenarios that involve a large volume of data writes and persistent latency of data synchronization.
     *
     * > You must evaluate the requirements for data and services based on your business scenarios and then select a switching mode.
     * @example AvailablePriority
     *
     * @var string
     */
    public $switchType;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'nodeId'               => 'NodeId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'switchMode'           => 'SwitchMode',
        'switchType'           => 'SwitchType',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }
        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchInstanceHARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}
