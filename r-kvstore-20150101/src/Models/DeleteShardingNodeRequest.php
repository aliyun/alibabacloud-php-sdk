<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DeleteShardingNodeRequest extends Model
{
    /**
     * @description Specifies whether to enable forced transmission during a configuration change. Valid values:
     *
     *   **false** (default): Before the configuration change, the system checks the minor version of the instance. If the minor version of the instance is outdated, an error is reported. You must update the minor version of the instance and try again.
     *   **true**: The system skips the version check and directly performs the configuration change.
     *
     * @example false
     *
     * @var bool
     */
    public $forceTrans;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data shard that you want to remove. You can specify multiple IDs at a time. Separate multiple IDs with commas (,).
     *
     * > If you specify both the NodeId and ShardCount parameters, the system prioritizes the NodeId parameter.
     * @example r-bp1zxszhcgatnx****-db-0,r-bp1zxszhcgatnx****-db-1
     *
     * @deprecated
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
     * @description The number of data shards that you want to remove. Shard removal starts from the end of the shard list.
     *
     * > For example, the instance has the following data shards: db-0, db-1, db-2, db-3, and db-4. In this case, if you set this parameter to 2, db-3 and db-4 are removed.
     * @example 1
     *
     * @var int
     */
    public $shardCount;
    protected $_name = [
        'forceTrans'           => 'ForceTrans',
        'instanceId'           => 'InstanceId',
        'nodeId'               => 'NodeId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'shardCount'           => 'ShardCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceTrans) {
            $res['ForceTrans'] = $this->forceTrans;
        }
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
        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteShardingNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForceTrans'])) {
            $model->forceTrans = $map['ForceTrans'];
        }
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
        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        return $model;
    }
}
