<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceHARequest extends Model
{
    /**
     * @description The ID of the instance
     *
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the shard node in the sharded cluster instance.
     *
     * > You must specify this parameter if you set the **DBInstanceId** parameter to the ID of a sharded cluster instance.
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
     * @description The IDs of the roles who switch the primary and secondary nodes for the instance. You can call the [DescribeRoleZoneInfo](~~123802~~) operation to view the IDs and information of roles of nodes.
     *
     * >
     *
     *   Separate role IDs with commas (,). If this parameter is not specified, the primary and secondary nodes are switched.
     *
     *   If you set the **DBInstanceId** parameter to the ID of a sharded cluster instance, the roles who switch the primary and secondary nodes for the instance must belong to one shard node.
     *
     * @example 972xxxx,972xxxx
     *
     * @var string
     */
    public $roleIds;

    /**
     * @description The time when the primary and secondary nodes are switched. Valid values:
     *
     *   0: The primary and secondary nodes are immediately switched.
     *   1: The primary and secondary nodes are switched during the O\&M time period.
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
        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
