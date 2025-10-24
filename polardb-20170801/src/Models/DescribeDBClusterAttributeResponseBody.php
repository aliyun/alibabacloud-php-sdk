<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\tags;

class DescribeDBClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $aiCreatingTime;

    /**
     * @var string
     */
    public $aiType;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @var int
     */
    public $blktagTotal;

    /**
     * @var int
     */
    public $blktagUsed;

    /**
     * @var string
     */
    public $burstingEnabled;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $compressStorageMode;

    /**
     * @var int
     */
    public $compressStorageUsed;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var DBNodes[]
     */
    public $DBNodes;

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
    public $DBVersionStatus;

    /**
     * @var int
     */
    public $dataLevel1BackupChainSize;

    /**
     * @var string
     */
    public $dataSyncMode;

    /**
     * @var int
     */
    public $deletionLock;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var bool
     */
    public $hasCompleteStandbyRes;

    /**
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @var string
     */
    public $imciAutoIndex;

    /**
     * @var string
     */
    public $imperceptibleSwitch;

    /**
     * @var int
     */
    public $inodeTotal;

    /**
     * @var int
     */
    public $inodeUsed;

    /**
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @var bool
     */
    public $isProxyLatestVersion;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $orca;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $provisionedIops;

    /**
     * @var string
     */
    public $proxyCpuCores;

    /**
     * @var string
     */
    public $proxyServerlessType;

    /**
     * @var string
     */
    public $proxyStandardCpuCores;

    /**
     * @var string
     */
    public $proxyStatus;

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
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $restoreDataPoint;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $rowCompression;

    /**
     * @var int
     */
    public $SQLSize;

    /**
     * @var string
     */
    public $searchClusterStatus;

    /**
     * @var int
     */
    public $searchCompressStorageUsed;

    /**
     * @var int
     */
    public $searchStorageUsed;

    /**
     * @var string
     */
    public $serverlessType;

    /**
     * @var string
     */
    public $sourceDBCluster;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $standbyHAMode;

    /**
     * @var int
     */
    public $storageMax;

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
    public $storageUsed;

    /**
     * @var string
     */
    public $strictConsistency;

    /**
     * @var string
     */
    public $subCategory;

    /**
     * @var string
     */
    public $supportInstantSwitchWithImci;

    /**
     * @var tags[]
     */
    public $tags;

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
    public $zoneIds;
    protected $_name = [
        'aiCreatingTime' => 'AiCreatingTime',
        'aiType' => 'AiType',
        'architecture' => 'Architecture',
        'autoUpgradeMinorVersion' => 'AutoUpgradeMinorVersion',
        'blktagTotal' => 'BlktagTotal',
        'blktagUsed' => 'BlktagUsed',
        'burstingEnabled' => 'BurstingEnabled',
        'category' => 'Category',
        'compressStorageMode' => 'CompressStorageMode',
        'compressStorageUsed' => 'CompressStorageUsed',
        'creationTime' => 'CreationTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBNodes' => 'DBNodes',
        'DBType' => 'DBType',
        'DBVersion' => 'DBVersion',
        'DBVersionStatus' => 'DBVersionStatus',
        'dataLevel1BackupChainSize' => 'DataLevel1BackupChainSize',
        'dataSyncMode' => 'DataSyncMode',
        'deletionLock' => 'DeletionLock',
        'engine' => 'Engine',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'hasCompleteStandbyRes' => 'HasCompleteStandbyRes',
        'hotStandbyCluster' => 'HotStandbyCluster',
        'imciAutoIndex' => 'ImciAutoIndex',
        'imperceptibleSwitch' => 'ImperceptibleSwitch',
        'inodeTotal' => 'InodeTotal',
        'inodeUsed' => 'InodeUsed',
        'isLatestVersion' => 'IsLatestVersion',
        'isProxyLatestVersion' => 'IsProxyLatestVersion',
        'lockMode' => 'LockMode',
        'maintainTime' => 'MaintainTime',
        'orca' => 'Orca',
        'payType' => 'PayType',
        'provisionedIops' => 'ProvisionedIops',
        'proxyCpuCores' => 'ProxyCpuCores',
        'proxyServerlessType' => 'ProxyServerlessType',
        'proxyStandardCpuCores' => 'ProxyStandardCpuCores',
        'proxyStatus' => 'ProxyStatus',
        'proxyType' => 'ProxyType',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'restoreDataPoint' => 'RestoreDataPoint',
        'restoreType' => 'RestoreType',
        'rowCompression' => 'RowCompression',
        'SQLSize' => 'SQLSize',
        'searchClusterStatus' => 'SearchClusterStatus',
        'searchCompressStorageUsed' => 'SearchCompressStorageUsed',
        'searchStorageUsed' => 'SearchStorageUsed',
        'serverlessType' => 'ServerlessType',
        'sourceDBCluster' => 'SourceDBCluster',
        'sourceRegionId' => 'SourceRegionId',
        'standbyHAMode' => 'StandbyHAMode',
        'storageMax' => 'StorageMax',
        'storagePayType' => 'StoragePayType',
        'storageSpace' => 'StorageSpace',
        'storageType' => 'StorageType',
        'storageUsed' => 'StorageUsed',
        'strictConsistency' => 'StrictConsistency',
        'subCategory' => 'SubCategory',
        'supportInstantSwitchWithImci' => 'SupportInstantSwitchWithImci',
        'tags' => 'Tags',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodes)) {
            Model::validateArray($this->DBNodes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiCreatingTime) {
            $res['AiCreatingTime'] = $this->aiCreatingTime;
        }

        if (null !== $this->aiType) {
            $res['AiType'] = $this->aiType;
        }

        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }

        if (null !== $this->blktagTotal) {
            $res['BlktagTotal'] = $this->blktagTotal;
        }

        if (null !== $this->blktagUsed) {
            $res['BlktagUsed'] = $this->blktagUsed;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->compressStorageMode) {
            $res['CompressStorageMode'] = $this->compressStorageMode;
        }

        if (null !== $this->compressStorageUsed) {
            $res['CompressStorageUsed'] = $this->compressStorageUsed;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }

        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }

        if (null !== $this->DBNodes) {
            if (\is_array($this->DBNodes)) {
                $res['DBNodes'] = [];
                $n1 = 0;
                foreach ($this->DBNodes as $item1) {
                    $res['DBNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }

        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }

        if (null !== $this->DBVersionStatus) {
            $res['DBVersionStatus'] = $this->DBVersionStatus;
        }

        if (null !== $this->dataLevel1BackupChainSize) {
            $res['DataLevel1BackupChainSize'] = $this->dataLevel1BackupChainSize;
        }

        if (null !== $this->dataSyncMode) {
            $res['DataSyncMode'] = $this->dataSyncMode;
        }

        if (null !== $this->deletionLock) {
            $res['DeletionLock'] = $this->deletionLock;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }

        if (null !== $this->hasCompleteStandbyRes) {
            $res['HasCompleteStandbyRes'] = $this->hasCompleteStandbyRes;
        }

        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }

        if (null !== $this->imciAutoIndex) {
            $res['ImciAutoIndex'] = $this->imciAutoIndex;
        }

        if (null !== $this->imperceptibleSwitch) {
            $res['ImperceptibleSwitch'] = $this->imperceptibleSwitch;
        }

        if (null !== $this->inodeTotal) {
            $res['InodeTotal'] = $this->inodeTotal;
        }

        if (null !== $this->inodeUsed) {
            $res['InodeUsed'] = $this->inodeUsed;
        }

        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }

        if (null !== $this->isProxyLatestVersion) {
            $res['IsProxyLatestVersion'] = $this->isProxyLatestVersion;
        }

        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }

        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }

        if (null !== $this->orca) {
            $res['Orca'] = $this->orca;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }

        if (null !== $this->proxyCpuCores) {
            $res['ProxyCpuCores'] = $this->proxyCpuCores;
        }

        if (null !== $this->proxyServerlessType) {
            $res['ProxyServerlessType'] = $this->proxyServerlessType;
        }

        if (null !== $this->proxyStandardCpuCores) {
            $res['ProxyStandardCpuCores'] = $this->proxyStandardCpuCores;
        }

        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }

        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->restoreDataPoint) {
            $res['RestoreDataPoint'] = $this->restoreDataPoint;
        }

        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        if (null !== $this->rowCompression) {
            $res['RowCompression'] = $this->rowCompression;
        }

        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
        }

        if (null !== $this->searchClusterStatus) {
            $res['SearchClusterStatus'] = $this->searchClusterStatus;
        }

        if (null !== $this->searchCompressStorageUsed) {
            $res['SearchCompressStorageUsed'] = $this->searchCompressStorageUsed;
        }

        if (null !== $this->searchStorageUsed) {
            $res['SearchStorageUsed'] = $this->searchStorageUsed;
        }

        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }

        if (null !== $this->sourceDBCluster) {
            $res['SourceDBCluster'] = $this->sourceDBCluster;
        }

        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }

        if (null !== $this->standbyHAMode) {
            $res['StandbyHAMode'] = $this->standbyHAMode;
        }

        if (null !== $this->storageMax) {
            $res['StorageMax'] = $this->storageMax;
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

        if (null !== $this->storageUsed) {
            $res['StorageUsed'] = $this->storageUsed;
        }

        if (null !== $this->strictConsistency) {
            $res['StrictConsistency'] = $this->strictConsistency;
        }

        if (null !== $this->subCategory) {
            $res['SubCategory'] = $this->subCategory;
        }

        if (null !== $this->supportInstantSwitchWithImci) {
            $res['SupportInstantSwitchWithImci'] = $this->supportInstantSwitchWithImci;
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

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
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
        if (isset($map['AiCreatingTime'])) {
            $model->aiCreatingTime = $map['AiCreatingTime'];
        }

        if (isset($map['AiType'])) {
            $model->aiType = $map['AiType'];
        }

        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }

        if (isset($map['BlktagTotal'])) {
            $model->blktagTotal = $map['BlktagTotal'];
        }

        if (isset($map['BlktagUsed'])) {
            $model->blktagUsed = $map['BlktagUsed'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CompressStorageMode'])) {
            $model->compressStorageMode = $map['CompressStorageMode'];
        }

        if (isset($map['CompressStorageUsed'])) {
            $model->compressStorageUsed = $map['CompressStorageUsed'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }

        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }

        if (isset($map['DBNodes'])) {
            if (!empty($map['DBNodes'])) {
                $model->DBNodes = [];
                $n1 = 0;
                foreach ($map['DBNodes'] as $item1) {
                    $model->DBNodes[$n1] = DBNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }

        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }

        if (isset($map['DBVersionStatus'])) {
            $model->DBVersionStatus = $map['DBVersionStatus'];
        }

        if (isset($map['DataLevel1BackupChainSize'])) {
            $model->dataLevel1BackupChainSize = $map['DataLevel1BackupChainSize'];
        }

        if (isset($map['DataSyncMode'])) {
            $model->dataSyncMode = $map['DataSyncMode'];
        }

        if (isset($map['DeletionLock'])) {
            $model->deletionLock = $map['DeletionLock'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }

        if (isset($map['HasCompleteStandbyRes'])) {
            $model->hasCompleteStandbyRes = $map['HasCompleteStandbyRes'];
        }

        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }

        if (isset($map['ImciAutoIndex'])) {
            $model->imciAutoIndex = $map['ImciAutoIndex'];
        }

        if (isset($map['ImperceptibleSwitch'])) {
            $model->imperceptibleSwitch = $map['ImperceptibleSwitch'];
        }

        if (isset($map['InodeTotal'])) {
            $model->inodeTotal = $map['InodeTotal'];
        }

        if (isset($map['InodeUsed'])) {
            $model->inodeUsed = $map['InodeUsed'];
        }

        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }

        if (isset($map['IsProxyLatestVersion'])) {
            $model->isProxyLatestVersion = $map['IsProxyLatestVersion'];
        }

        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }

        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }

        if (isset($map['Orca'])) {
            $model->orca = $map['Orca'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        if (isset($map['ProxyCpuCores'])) {
            $model->proxyCpuCores = $map['ProxyCpuCores'];
        }

        if (isset($map['ProxyServerlessType'])) {
            $model->proxyServerlessType = $map['ProxyServerlessType'];
        }

        if (isset($map['ProxyStandardCpuCores'])) {
            $model->proxyStandardCpuCores = $map['ProxyStandardCpuCores'];
        }

        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }

        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RestoreDataPoint'])) {
            $model->restoreDataPoint = $map['RestoreDataPoint'];
        }

        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        if (isset($map['RowCompression'])) {
            $model->rowCompression = $map['RowCompression'];
        }

        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
        }

        if (isset($map['SearchClusterStatus'])) {
            $model->searchClusterStatus = $map['SearchClusterStatus'];
        }

        if (isset($map['SearchCompressStorageUsed'])) {
            $model->searchCompressStorageUsed = $map['SearchCompressStorageUsed'];
        }

        if (isset($map['SearchStorageUsed'])) {
            $model->searchStorageUsed = $map['SearchStorageUsed'];
        }

        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }

        if (isset($map['SourceDBCluster'])) {
            $model->sourceDBCluster = $map['SourceDBCluster'];
        }

        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }

        if (isset($map['StandbyHAMode'])) {
            $model->standbyHAMode = $map['StandbyHAMode'];
        }

        if (isset($map['StorageMax'])) {
            $model->storageMax = $map['StorageMax'];
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

        if (isset($map['StorageUsed'])) {
            $model->storageUsed = $map['StorageUsed'];
        }

        if (isset($map['StrictConsistency'])) {
            $model->strictConsistency = $map['StrictConsistency'];
        }

        if (isset($map['SubCategory'])) {
            $model->subCategory = $map['SubCategory'];
        }

        if (isset($map['SupportInstantSwitchWithImci'])) {
            $model->supportInstantSwitchWithImci = $map['SupportInstantSwitchWithImci'];
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

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
