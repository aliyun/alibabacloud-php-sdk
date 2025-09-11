<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\CreateDBClusterRequest\tag;

class CreateDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $allowShutDown;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @var string
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloneDataPoint;

    /**
     * @var string
     */
    public $clusterNetworkType;

    /**
     * @var string
     */
    public $creationCategory;

    /**
     * @var string
     */
    public $creationOption;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBMinorVersion;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeNum;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $defaultTimeZone;

    /**
     * @var string
     */
    public $GDNId;

    /**
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @var string
     */
    public $loosePolarLogBin;

    /**
     * @var string
     */
    public $looseXEngine;

    /**
     * @var string
     */
    public $looseXEngineUseMemoryPct;

    /**
     * @var string
     */
    public $lowerCaseTableNames;

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
    public $parameterGroupId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $proxyClass;

    /**
     * @var string
     */
    public $proxyType;

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
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $serverlessType;

    /**
     * @var string
     */
    public $sourceResourceId;

    /**
     * @var int
     */
    public $sourceUid;

    /**
     * @var string
     */
    public $standbyAZ;

    /**
     * @var string
     */
    public $storageAutoScale;

    /**
     * @var bool
     */
    public $storageEncryption;

    /**
     * @var string
     */
    public $storageEncryptionKey;

    /**
     * @var string
     */
    public $storagePayType;

    /**
     * @var int
     */
    public $storageSpace;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageUpperBound;

    /**
     * @var string
     */
    public $strictConsistency;

    /**
     * @var bool
     */
    public $TDEStatus;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $targetMinorVersion;

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
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowShutDown' => 'AllowShutDown',
        'architecture' => 'Architecture',
        'autoRenew' => 'AutoRenew',
        'backupRetentionPolicyOnClusterDeletion' => 'BackupRetentionPolicyOnClusterDeletion',
        'burstingEnabled' => 'BurstingEnabled',
        'clientToken' => 'ClientToken',
        'cloneDataPoint' => 'CloneDataPoint',
        'clusterNetworkType' => 'ClusterNetworkType',
        'creationCategory' => 'CreationCategory',
        'creationOption' => 'CreationOption',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBMinorVersion' => 'DBMinorVersion',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeNum' => 'DBNodeNum',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'defaultTimeZone' => 'DefaultTimeZone',
        'GDNId' => 'GDNId',
        'hotStandbyCluster' => 'HotStandbyCluster',
        'loosePolarLogBin' => 'LoosePolarLogBin',
        'looseXEngine' => 'LooseXEngine',
        'looseXEngineUseMemoryPct' => 'LooseXEngineUseMemoryPct',
        'lowerCaseTableNames' => 'LowerCaseTableNames',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'parameterGroupId' => 'ParameterGroupId',
        'payType' => 'PayType',
        'period' => 'Period',
        'provisionedIops' => 'ProvisionedIops',
        'proxyClass' => 'ProxyClass',
        'proxyType' => 'ProxyType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'scaleMax' => 'ScaleMax',
        'scaleMin' => 'ScaleMin',
        'scaleRoNumMax' => 'ScaleRoNumMax',
        'scaleRoNumMin' => 'ScaleRoNumMin',
        'securityIPList' => 'SecurityIPList',
        'serverlessType' => 'ServerlessType',
        'sourceResourceId' => 'SourceResourceId',
        'sourceUid' => 'SourceUid',
        'standbyAZ' => 'StandbyAZ',
        'storageAutoScale' => 'StorageAutoScale',
        'storageEncryption' => 'StorageEncryption',
        'storageEncryptionKey' => 'StorageEncryptionKey',
        'storagePayType' => 'StoragePayType',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'storageUpperBound' => 'StorageUpperBound',
        'strictConsistency' => 'StrictConsistency',
        'TDEStatus' => 'TDEStatus',
        'tag' => 'Tag',
        'targetMinorVersion' => 'TargetMinorVersion',
        'usedTime' => 'UsedTime',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloneDataPoint) {
            $res['CloneDataPoint'] = $this->cloneDataPoint;
        }

        if (null !== $this->clusterNetworkType) {
            $res['ClusterNetworkType'] = $this->clusterNetworkType;
        }

        if (null !== $this->creationCategory) {
            $res['CreationCategory'] = $this->creationCategory;
        }

        if (null !== $this->creationOption) {
            $res['CreationOption'] = $this->creationOption;
        }

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBMinorVersion) {
            $res['DBMinorVersion'] = $this->DBMinorVersion;
        }

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBNodeNum) {
            $res['DBNodeNum'] = $this->DBNodeNum;
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->defaultTimeZone) {
            $res['DefaultTimeZone'] = $this->defaultTimeZone;
        }

        if (null !== $this->GDNId) {
            $res['GDNId'] = $this->GDNId;
        }

        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }

        if (null !== $this->loosePolarLogBin) {
            $res['LoosePolarLogBin'] = $this->loosePolarLogBin;
        }

        if (null !== $this->looseXEngine) {
            $res['LooseXEngine'] = $this->looseXEngine;
        }

        if (null !== $this->looseXEngineUseMemoryPct) {
            $res['LooseXEngineUseMemoryPct'] = $this->looseXEngineUseMemoryPct;
        }

        if (null !== $this->lowerCaseTableNames) {
            $res['LowerCaseTableNames'] = $this->lowerCaseTableNames;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parameterGroupId) {
            $res['ParameterGroupId'] = $this->parameterGroupId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->proxyClass) {
            $res['ProxyClass'] = $this->proxyClass;
        }

        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
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

        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }

        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }

        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }

        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }

        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }

        if (null !== $this->sourceUid) {
            $res['SourceUid'] = $this->sourceUid;
        }

        if (null !== $this->standbyAZ) {
            $res['StandbyAZ'] = $this->standbyAZ;
        }

        if (null !== $this->storageAutoScale) {
            $res['StorageAutoScale'] = $this->storageAutoScale;
        }

        if (null !== $this->storageEncryption) {
            $res['StorageEncryption'] = $this->storageEncryption;
        }

        if (null !== $this->storageEncryptionKey) {
            $res['StorageEncryptionKey'] = $this->storageEncryptionKey;
        }

        if (null !== $this->storagePayType) {
            $res['StoragePayType'] = $this->storagePayType;
        }

        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->storageUpperBound) {
            $res['StorageUpperBound'] = $this->storageUpperBound;
        }

        if (null !== $this->strictConsistency) {
            $res['StrictConsistency'] = $this->strictConsistency;
        }

        if (null !== $this->TDEStatus) {
            $res['TDEStatus'] = $this->TDEStatus;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }

        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloneDataPoint'])) {
            $model->cloneDataPoint = $map['CloneDataPoint'];
        }

        if (isset($map['ClusterNetworkType'])) {
            $model->clusterNetworkType = $map['ClusterNetworkType'];
        }

        if (isset($map['CreationCategory'])) {
            $model->creationCategory = $map['CreationCategory'];
        }

        if (isset($map['CreationOption'])) {
            $model->creationOption = $map['CreationOption'];
        }

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBMinorVersion'])) {
            $model->DBMinorVersion = $map['DBMinorVersion'];
        }

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBNodeNum'])) {
            $model->DBNodeNum = $map['DBNodeNum'];
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['DefaultTimeZone'])) {
            $model->defaultTimeZone = $map['DefaultTimeZone'];
        }

        if (isset($map['GDNId'])) {
            $model->GDNId = $map['GDNId'];
        }

        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }

        if (isset($map['LoosePolarLogBin'])) {
            $model->loosePolarLogBin = $map['LoosePolarLogBin'];
        }

        if (isset($map['LooseXEngine'])) {
            $model->looseXEngine = $map['LooseXEngine'];
        }

        if (isset($map['LooseXEngineUseMemoryPct'])) {
            $model->looseXEngineUseMemoryPct = $map['LooseXEngineUseMemoryPct'];
        }

        if (isset($map['LowerCaseTableNames'])) {
            $model->lowerCaseTableNames = $map['LowerCaseTableNames'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ParameterGroupId'])) {
            $model->parameterGroupId = $map['ParameterGroupId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['ProxyClass'])) {
            $model->proxyClass = $map['ProxyClass'];
        }

        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
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

        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }

        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }

        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }

        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }

        if (isset($map['SourceResourceId'])) {
            $model->sourceResourceId = $map['SourceResourceId'];
        }

        if (isset($map['SourceUid'])) {
            $model->sourceUid = $map['SourceUid'];
        }

        if (isset($map['StandbyAZ'])) {
            $model->standbyAZ = $map['StandbyAZ'];
        }

        if (isset($map['StorageAutoScale'])) {
            $model->storageAutoScale = $map['StorageAutoScale'];
        }

        if (isset($map['StorageEncryption'])) {
            $model->storageEncryption = $map['StorageEncryption'];
        }

        if (isset($map['StorageEncryptionKey'])) {
            $model->storageEncryptionKey = $map['StorageEncryptionKey'];
        }

        if (isset($map['StoragePayType'])) {
            $model->storagePayType = $map['StoragePayType'];
        }

        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['StorageUpperBound'])) {
            $model->storageUpperBound = $map['StorageUpperBound'];
        }

        if (isset($map['StrictConsistency'])) {
            $model->strictConsistency = $map['StrictConsistency'];
        }

        if (isset($map['TDEStatus'])) {
            $model->TDEStatus = $map['TDEStatus'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
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

        return $model;
    }
}
