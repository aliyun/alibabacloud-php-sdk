<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\CloneDBInstanceRequest\serverlessConfig;

class CloneDBInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $backupId;
    /**
     * @var string
     */
    public $backupType;
    /**
     * @var string
     */
    public $bpeEnabled;
    /**
     * @var bool
     */
    public $burstingEnabled;
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $DBInstanceClass;
    /**
     * @var string
     */
    public $DBInstanceDescription;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var int
     */
    public $DBInstanceStorage;
    /**
     * @var string
     */
    public $DBInstanceStorageType;
    /**
     * @var string
     */
    public $dbNames;
    /**
     * @var string
     */
    public $dedicatedHostGroupId;
    /**
     * @var bool
     */
    public $deletionProtection;
    /**
     * @var string
     */
    public $instanceNetworkType;
    /**
     * @var string
     */
    public $ioAccelerationEnabled;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $privateIpAddress;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $restoreTable;
    /**
     * @var string
     */
    public $restoreTime;
    /**
     * @var serverlessConfig
     */
    public $serverlessConfig;
    /**
     * @var string
     */
    public $tableMeta;
    /**
     * @var int
     */
    public $usedTime;
    /**
     * @var string
     */
    public $VPCId;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $zoneId;
    /**
     * @var string
     */
    public $zoneIdSlave1;
    /**
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'autoPay'               => 'AutoPay',
        'backupId'              => 'BackupId',
        'backupType'            => 'BackupType',
        'bpeEnabled'            => 'BpeEnabled',
        'burstingEnabled'       => 'BurstingEnabled',
        'category'              => 'Category',
        'clientToken'           => 'ClientToken',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dbNames'               => 'DbNames',
        'dedicatedHostGroupId'  => 'DedicatedHostGroupId',
        'deletionProtection'    => 'DeletionProtection',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'ioAccelerationEnabled' => 'IoAccelerationEnabled',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'regionId'              => 'RegionId',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'restoreTable'          => 'RestoreTable',
        'restoreTime'           => 'RestoreTime',
        'serverlessConfig'      => 'ServerlessConfig',
        'tableMeta'             => 'TableMeta',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
        'zoneIdSlave1'          => 'ZoneIdSlave1',
        'zoneIdSlave2'          => 'ZoneIdSlave2',
    ];

    public function validate()
    {
        if (null !== $this->serverlessConfig) {
            $this->serverlessConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }

        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }

        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->restoreTable) {
            $res['RestoreTable'] = $this->restoreTable;
        }

        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }

        if (null !== $this->serverlessConfig) {
            $res['ServerlessConfig'] = null !== $this->serverlessConfig ? $this->serverlessConfig->toArray($noStream) : $this->serverlessConfig;
        }

        if (null !== $this->tableMeta) {
            $res['TableMeta'] = $this->tableMeta;
        }

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }

        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }

        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RestoreTable'])) {
            $model->restoreTable = $map['RestoreTable'];
        }

        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }

        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfig = serverlessConfig::fromMap($map['ServerlessConfig']);
        }

        if (isset($map['TableMeta'])) {
            $model->tableMeta = $map['TableMeta'];
        }

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }

        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
