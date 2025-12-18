<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CreateDBInstanceRequest\tags;

class CreateDBInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $backupSetID;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DBClusterCategory;

    /**
     * @var string
     */
    public $DBClusterClass;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @var string
     */
    public $DBNodeGroupCount;

    /**
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @var string
     */
    public $dbNodeStorageType;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
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
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $usedTime;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchBak;

    /**
     * @var string
     */
    public $vSwitchBak2;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zondIdBak2;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneIdBak;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'backupSetID' => 'BackupSetID',
        'clientToken' => 'ClientToken',
        'DBClusterCategory' => 'DBClusterCategory',
        'DBClusterClass' => 'DBClusterClass',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterVersion' => 'DBClusterVersion',
        'DBNodeGroupCount' => 'DBNodeGroupCount',
        'DBNodeStorage' => 'DBNodeStorage',
        'dbNodeStorageType' => 'DbNodeStorageType',
        'encryptionKey' => 'EncryptionKey',
        'encryptionType' => 'EncryptionType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceDBClusterId' => 'SourceDBClusterId',
        'tags' => 'Tags',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchBak' => 'VSwitchBak',
        'vSwitchBak2' => 'VSwitchBak2',
        'vSwitchId' => 'VSwitchId',
        'zondIdBak2' => 'ZondIdBak2',
        'zoneId' => 'ZoneId',
        'zoneIdBak' => 'ZoneIdBak',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
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
