<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceHARequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the shard in the sharded cluster instance.
     *
     * >  You must specify this parameter if the value of **DBInstanceId** is the ID of a sharded cluster instance.
     * @example d-bpxxxxxxxx
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
     * @description The IDs of the roles that you want to switch. You can call the [DescribeRoleZoneInfo](~~123802~~) operation to query IDs of roles and roles of nodes.
     *
     * > * Separate role IDs with commas (,). If this parameter is not specified, roles of the primary and secondary nodes are switched.
     * > * If the value of **DBInstanceId** is the ID of a sharded cluster instance, the roles to be switched must belong to one shard.
     * @example 972xxxx,972xxxx
     *
     * @var string
     */
    public $roleIds;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The time when roles of the primary and secondary nodes are switched. Valid values:
     *
     *   0: The roles are switched immediately.
     *   1: The roles are switched during the maintenance period.
     *
     * @example 0
     *
     * @var int
     */
    public $switchMode;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'nodeId'               => 'NodeId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleIds'              => 'RoleIds',
        'securityToken'        => 'SecurityToken',
        'switchMode'           => 'SwitchMode',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->roleIds) {
            $res['RoleIds'] = $this->roleIds;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchDBInstanceHARequest
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
        if (isset($map['RoleIds'])) {
            $model->roleIds = $map['RoleIds'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
