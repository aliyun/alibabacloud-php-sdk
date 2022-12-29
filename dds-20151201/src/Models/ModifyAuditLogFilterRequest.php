<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class ModifyAuditLogFilterRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example dds-bp12c5b040dc****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the audit log entries to be collected. Valid values:
     *
     *   **admin**: O\&M and management operations
     *   **slow**: slow query logs
     *   **query**: query operations
     *   **insert**: insert operations
     *   **update**: update operations
     *   **delete**: delete operations
     *   **command**: protocol commands such as the aggregate method
     *
     * @example insert,query,update,delete
     *
     * @var string
     */
    public $filter;

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
     * @description The role of the node in the instance. Valid values:
     *
     *   **primary**
     *   **secondary**
     *
     * @example primary
     *
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'filter'               => 'Filter',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'roleType'             => 'RoleType',
        'securityToken'        => 'SecurityToken',
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
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
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
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAuditLogFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
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
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
