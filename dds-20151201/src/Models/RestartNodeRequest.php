<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class RestartNodeRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * >  If you set this parameter to the ID of a sharded cluster instance, you must also specify the **NodeId** parameter.
     *
     * This parameter is required.
     *
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the shard, mongos, or ConfigServer node in a child instance of the sharded cluster instance.
     *
     * >  If you set the **DBInstanceId** parameter to the ID of a sharded cluster instance, you must specify this parameter.
     *
     * @example d-bp128a003436****
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
     * @description The role ID of the node.
     *
     * 1.  You can call the [DescribeReplicaSetRole](https://help.aliyun.com/document_detail/468469.html) operation to query the role ID of a node in a replica set instance.
     * 2.  You can call the [DescribeRoleZoneInfo](https://help.aliyun.com/document_detail/468472.html) operation to query the role ID of a node in a sharded cluster instance.
     *
     * This parameter is required.
     *
     * @example 6025****
     *
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $switchMode;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'nodeId' => 'NodeId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'roleId' => 'RoleId',
        'switchMode' => 'SwitchMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartNodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
