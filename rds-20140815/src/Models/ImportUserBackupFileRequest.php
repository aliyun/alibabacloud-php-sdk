<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ImportUserBackupFileRequest extends Model
{
    /**
     * @var string
     */
    public $backupFile;

    /**
     * @var string
     */
    public $bucketRegion;

    /**
     * @var bool
     */
    public $buildReplication;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $masterInfo;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
     * @var int
     */
    public $restoreSize;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $sourceInfo;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupFile' => 'BackupFile',
        'bucketRegion' => 'BucketRegion',
        'buildReplication' => 'BuildReplication',
        'comment' => 'Comment',
        'DBInstanceId' => 'DBInstanceId',
        'engineVersion' => 'EngineVersion',
        'masterInfo' => 'MasterInfo',
        'mode' => 'Mode',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'restoreSize' => 'RestoreSize',
        'retention' => 'Retention',
        'sourceInfo' => 'SourceInfo',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupFile) {
            $res['BackupFile'] = $this->backupFile;
        }

        if (null !== $this->bucketRegion) {
            $res['BucketRegion'] = $this->bucketRegion;
        }

        if (null !== $this->buildReplication) {
            $res['BuildReplication'] = $this->buildReplication;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->masterInfo) {
            $res['MasterInfo'] = $this->masterInfo;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (null !== $this->restoreSize) {
            $res['RestoreSize'] = $this->restoreSize;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->sourceInfo) {
            $res['SourceInfo'] = $this->sourceInfo;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupFile'])) {
            $model->backupFile = $map['BackupFile'];
        }

        if (isset($map['BucketRegion'])) {
            $model->bucketRegion = $map['BucketRegion'];
        }

        if (isset($map['BuildReplication'])) {
            $model->buildReplication = $map['BuildReplication'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['MasterInfo'])) {
            $model->masterInfo = $map['MasterInfo'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['RestoreSize'])) {
            $model->restoreSize = $map['RestoreSize'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['SourceInfo'])) {
            $model->sourceInfo = $map['SourceInfo'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
