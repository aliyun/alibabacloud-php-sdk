<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateDdrDBInstanceRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $backupSetId;

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
    public $hostType;

    /**
     * @var string
     */
    public $binlogName;

    /**
     * @var string
     */
    public $binlogPosition;

    /**
     * @var string
     */
    public $binlogRole;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'engine'               => 'Engine',
        'engineVersion'        => 'EngineVersion',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceStorage'    => 'DBInstanceStorage',
        'restoreType'          => 'RestoreType',
        'backupSetId'          => 'BackupSetId',
        'backupSetType'        => 'BackupSetType',
        'backupSetRegion'      => 'BackupSetRegion',
        'restoreTime'          => 'RestoreTime',
        'sourceRegion'         => 'SourceRegion',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'userBakSetURL'        => 'UserBakSetURL',
        'bakSetName'           => 'BakSetName',
        'hostType'             => 'HostType',
        'binlogName'           => 'BinlogName',
        'binlogPosition'       => 'BinlogPosition',
        'binlogRole'           => 'BinlogRole',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
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
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->binlogName) {
            $res['BinlogName'] = $this->binlogName;
        }
        if (null !== $this->binlogPosition) {
            $res['BinlogPosition'] = $this->binlogPosition;
        }
        if (null !== $this->binlogRole) {
            $res['BinlogRole'] = $this->binlogRole;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCreateDdrDBInstanceRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
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
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['BinlogName'])) {
            $model->binlogName = $map['BinlogName'];
        }
        if (isset($map['BinlogPosition'])) {
            $model->binlogPosition = $map['BinlogPosition'];
        }
        if (isset($map['BinlogRole'])) {
            $model->binlogRole = $map['BinlogRole'];
        }

        return $model;
    }
}
