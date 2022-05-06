<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateMigrateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $backupMode;

    /**
     * @var string
     */
    public $checkDBMode;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $isOnlineDB;

    /**
     * @var string
     */
    public $migrateTaskId;

    /**
     * @var string
     */
    public $OSSUrls;

    /**
     * @var string
     */
    public $ossObjectPositions;

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
    protected $_name = [
        'backupMode'           => 'BackupMode',
        'checkDBMode'          => 'CheckDBMode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBName'               => 'DBName',
        'isOnlineDB'           => 'IsOnlineDB',
        'migrateTaskId'        => 'MigrateTaskId',
        'OSSUrls'              => 'OSSUrls',
        'ossObjectPositions'   => 'OssObjectPositions',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->checkDBMode) {
            $res['CheckDBMode'] = $this->checkDBMode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->isOnlineDB) {
            $res['IsOnlineDB'] = $this->isOnlineDB;
        }
        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }
        if (null !== $this->OSSUrls) {
            $res['OSSUrls'] = $this->OSSUrls;
        }
        if (null !== $this->ossObjectPositions) {
            $res['OssObjectPositions'] = $this->ossObjectPositions;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMigrateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['CheckDBMode'])) {
            $model->checkDBMode = $map['CheckDBMode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['IsOnlineDB'])) {
            $model->isOnlineDB = $map['IsOnlineDB'];
        }
        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }
        if (isset($map['OSSUrls'])) {
            $model->OSSUrls = $map['OSSUrls'];
        }
        if (isset($map['OssObjectPositions'])) {
            $model->ossObjectPositions = $map['OssObjectPositions'];
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

        return $model;
    }
}
