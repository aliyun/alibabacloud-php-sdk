<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RestoreDdrTableRequest extends Model
{
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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $backupId;

    /**
     * @var string
     */
    public $backupSetType;

    /**
     * @var string
     */
    public $backupSetRegion;

    /**
     * @var string
     */
    public $restoreTime;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @var string
     */
    public $userBakSetURL;

    /**
     * @var string
     */
    public $bakSetName;

    /**
     * @var string
     */
    public $tableMeta;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'DBInstanceId'         => 'DBInstanceId',
        'regionId'             => 'RegionId',
        'clientToken'          => 'ClientToken',
        'restoreType'          => 'RestoreType',
        'backupId'             => 'BackupId',
        'backupSetType'        => 'BackupSetType',
        'backupSetRegion'      => 'BackupSetRegion',
        'restoreTime'          => 'RestoreTime',
        'sourceRegion'         => 'SourceRegion',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'userBakSetURL'        => 'UserBakSetURL',
        'bakSetName'           => 'BakSetName',
        'tableMeta'            => 'TableMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupSetType) {
            $res['BackupSetType'] = $this->backupSetType;
        }
        if (null !== $this->backupSetRegion) {
            $res['BackupSetRegion'] = $this->backupSetRegion;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }
        if (null !== $this->userBakSetURL) {
            $res['UserBakSetURL'] = $this->userBakSetURL;
        }
        if (null !== $this->bakSetName) {
            $res['BakSetName'] = $this->bakSetName;
        }
        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreDdrTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupSetType'])) {
            $model->backupSetType = $map['BackupSetType'];
        }
        if (isset($map['BackupSetRegion'])) {
            $model->backupSetRegion = $map['BackupSetRegion'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }
        if (isset($map['UserBakSetURL'])) {
            $model->userBakSetURL = $map['UserBakSetURL'];
        }
        if (isset($map['BakSetName'])) {
            $model->bakSetName = $map['BakSetName'];
        }
        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }

        return $model;
    }
}
