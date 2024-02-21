<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The ID of the backup set. You can call the [DescribeBackups](~~360339~~) operation to query the backup sets.
     *
     * >  If you want to restore the data of an ApsaraDB for ClickHouse cluster, this parameter is required.
     * @example b-12af23adsf
     *
     * @var string
     */
    public $backupSetID;

    /**
     * @description The client token that is used to ensure the idempotence of the request. The value is a string and can be up to 64 ASCII characters in length.
     *
     * @example AB
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **Basic**: Single-replica Edition
     *   **HighAvailability**: Double-replica Edition
     *
     * @example Basic
     *
     * @var string
     */
    public $DBClusterCategory;

    /**
     * @description The specifications of the cluster.
     *
     *   Valid values when the cluster is of Single-replica Edition: -**S4**: 4 CPU cores and 16 GB of memory -**S8**: 8 CPU cores and 32 GB of memory -**S16**: 16 CPU cores and 64 GB of memory
     *
     *   **S32**: 32 CPU cores and 128 GB of memory
     *   **S64**: 64 CPU cores and 256 GB of memory
     *   **S104**: 104 CPU cores and 384 GB of memory
     *
     *   Valid values when the cluster is of Double-replica Edition: -**C4**: 4 CPU cores and 16 GB of memory -**C8**: 8 CPU cores and 32 GB of memory -**C16**: 16 CPU cores and 64 GB of memory -**C32**: 32 CPU cores and 128 GB of memory -**C64**: 64 CPU cores and 256 GB of memory -**C104**: 104 CPU cores and 384 GB of memory
     *
     * @example S8
     *
     * @var string
     */
    public $DBClusterClass;

    /**
     * @description The description of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The network type of the cluster. Only Virtual Private Cloud (VPC) is supported.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The kernel version. Valid values:
     *
     *   **21.8.10.19**
     *   **22.8.5.29**
     *
     * @example 20.8.7.15
     *
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @description The number of nodes.
     *
     *   Valid values when the cluster is of Single-replica Edition: 1 to 48.
     *   Valid values when the cluster is of Double-replica Edition: 1 to 24.
     *
     * @example 1
     *
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @description The storage capacity of a single node. Valid values: 100 to 32000. Unit: GB.
     *
     * >  This value is a multiple of 100.
     * @example 100
     *
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @description The storage type of the cluster. Valid values:
     *
     *   **CloudESSD_PL1**: The cluster uses an enhanced SSD (ESSD) of performance level (PL) 1.
     *   **CloudESSD_PL2**: The cluster uses an ESSD of PL2.
     *   **CloudESSD_PL3**: The cluster uses an ESSD of PL3.
     *   **CloudEfficiency**: The cluster uses an ultra disk.
     *
     * @example CloudESSD_PL2
     *
     * @var string
     */
    public $dbNodeStorageType;

    /**
     * @description You must specify this parameter when EncryptionType is set to CloudDisk.
     *
     * >  If EncryptionType is empty, you do not need to specify this parameter.
     * @example 0d2470df-da7b-4786-b981-9a164dae****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption type. Set the value to **CloudDisk**, which indicates that only disk encryption is supported.
     *
     * >  If this parameter is not specified, data is not encrypted.
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: The cluster uses the pay-as-you-go billing method.
     *   **Prepaid**: The cluster uses the subscription billing method.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. This parameter is required when PayType is set to Prepaid.
     *
     * Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~170875~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the cluster belongs.
     *
     * @example rg-4690g37929****
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
     * @description The ID of the source cluster. You can call the [DescribeDBClusters](~~170879~~) operation to query backup set IDs.
     *
     * >  If you want to restore the data of an ApsaraDB for ClickHouse cluster, this parameter is required.
     * @example cc-bp1lxbo89u950****
     *
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @description The subscription duration of the subscription cluster. This parameter is required when PayType is set to Prepaid.
     *
     * Valid values:
     *
     *   If Period is set to Year, the value of UsedTime must be an integer that ranges from 1 to 3.
     *   If Period is set to Month, the value of UsedTime must be an integer that ranges from 1 to 9.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description 备专有网络交换机
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchBak;

    /**
     * @description 备专有网络交换机2
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchBak2;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zondIdBak2;

    /**
     * @description The zone ID. You can call the [DescribeRegions](~~170875~~) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneIdBak;
    protected $_name = [
        'autoRenew'            => 'AutoRenew',
        'backupSetID'          => 'BackupSetID',
        'clientToken'          => 'ClientToken',
        'DBClusterCategory'    => 'DBClusterCategory',
        'DBClusterClass'       => 'DBClusterClass',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterVersion'     => 'DBClusterVersion',
        'DBNodeGroupCount'     => 'DBNodeGroupCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'dbNodeStorageType'    => 'DbNodeStorageType',
        'encryptionKey'        => 'EncryptionKey',
        'encryptionType'       => 'EncryptionType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'period'               => 'Period',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceDBClusterId'    => 'SourceDBClusterId',
        'usedTime'             => 'UsedTime',
        'VPCId'                => 'VPCId',
        'vSwitchBak'           => 'VSwitchBak',
        'vSwitchBak2'          => 'VSwitchBak2',
        'vSwitchId'            => 'VSwitchId',
        'zondIdBak2'           => 'ZondIdBak2',
        'zoneId'               => 'ZoneId',
        'zoneIdBak'            => 'ZoneIdBak',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->backupSetID) {
            $res['BackupSetID'] = $this->backupSetID;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterCategory) {
            $res['DBClusterCategory'] = $this->DBClusterCategory;
        }
        if (null !== $this->DBClusterClass) {
            $res['DBClusterClass'] = $this->DBClusterClass;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }
        if (null !== $this->DBNodeGroupCount) {
            $res['DBNodeGroupCount'] = $this->DBNodeGroupCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->dbNodeStorageType) {
            $res['DbNodeStorageType'] = $this->dbNodeStorageType;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
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
        if (null !== $this->sourceDBClusterId) {
            $res['SourceDBClusterId'] = $this->sourceDBClusterId;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchBak) {
            $res['VSwitchBak'] = $this->vSwitchBak;
        }
        if (null !== $this->vSwitchBak2) {
            $res['VSwitchBak2'] = $this->vSwitchBak2;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zondIdBak2) {
            $res['ZondIdBak2'] = $this->zondIdBak2;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneIdBak) {
            $res['ZoneIdBak'] = $this->zoneIdBak;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['BackupSetID'])) {
            $model->backupSetID = $map['BackupSetID'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterCategory'])) {
            $model->DBClusterCategory = $map['DBClusterCategory'];
        }
        if (isset($map['DBClusterClass'])) {
            $model->DBClusterClass = $map['DBClusterClass'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }
        if (isset($map['DBNodeGroupCount'])) {
            $model->DBNodeGroupCount = $map['DBNodeGroupCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['DbNodeStorageType'])) {
            $model->dbNodeStorageType = $map['DbNodeStorageType'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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
        if (isset($map['SourceDBClusterId'])) {
            $model->sourceDBClusterId = $map['SourceDBClusterId'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchBak'])) {
            $model->vSwitchBak = $map['VSwitchBak'];
        }
        if (isset($map['VSwitchBak2'])) {
            $model->vSwitchBak2 = $map['VSwitchBak2'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZondIdBak2'])) {
            $model->zondIdBak2 = $map['ZondIdBak2'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneIdBak'])) {
            $model->zoneIdBak = $map['ZoneIdBak'];
        }

        return $model;
    }
}
