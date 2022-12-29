<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class CheckRecoveryConditionRequest extends Model
{
    /**
     * @description The ID of the backup.
     *
     * > * You can call the [DescribeBackups](~~62172~~) operation to query the ID of the backup.
     * > * You must specify one of the **RestoreTime** and BackupId parameters.
     * > * This parameter is not applicable to sharded cluster instances.
     * @example 5664****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The name of the source database. The value is a JSON array.
     *
     * >  If you do not specify this parameter, all databases are restored.
     * @example ["db1","db2"]
     *
     * @var string
     */
    public $databaseNames;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group.
     *
     * @example sg-bp179****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The point in time to which the instance is restored. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > * The value can be any time within the past seven days. The time must be earlier than the current time, but later than the time when the instance was created.
     * > * You must specify one of the RestoreTime and **BackupId** parameters.
     * @example 2022-08-22T08:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the source instance.
     *
     * @example dds-bp1378****
     *
     * @var string
     */
    public $sourceDBInstance;
    protected $_name = [
        'backupId'             => 'BackupId',
        'databaseNames'        => 'DatabaseNames',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'securityToken'        => 'SecurityToken',
        'sourceDBInstance'     => 'SourceDBInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->databaseNames) {
            $res['DatabaseNames'] = $this->databaseNames;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sourceDBInstance) {
            $res['SourceDBInstance'] = $this->sourceDBInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRecoveryConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DatabaseNames'])) {
            $model->databaseNames = $map['DatabaseNames'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SourceDBInstance'])) {
            $model->sourceDBInstance = $map['SourceDBInstance'];
        }

        return $model;
    }
}
