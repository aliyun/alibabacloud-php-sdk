<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $aiCreatingTime;

    /**
     * @description The information status of the AI node. Valid values:
     *
     *   SearchNode: search node.
     *   DLNode: AI node
     *
     * @example DLNode
     *
     * @var string
     */
    public $aiType;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @description Maximum blktags in file system.
     *
     * @example 7,864,320
     *
     * @var int
     */
    public $blktagTotal;

    /**
     * @description The current blktag usage.
     *
     * @example 5,242,880
     *
     * @var int
     */
    public $blktagUsed;

    /**
     * @description [The edition of PolarDB](https://help.aliyun.com/document_detail/183258.html). Valid values:
     *
     *   **Normal**: Cluster Edition.
     *   **Basic**: Single Node Edition.
     *   **Archive**: X-Engine Edition.
     *   **NormalMultimaster**: Multi-master Cluster Edition.
     *   **SENormal**: Standard Edition.
     *
     * >- Only PolarDB for MySQL 8.0 supports X-Engine Edition and Multi-master Cluster Edition.
     * @example Normal
     *
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
     * @description The time when the cluster was created.
     *
     * @example 2020-08-14T05:58:42Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of cluster.
     *
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The status of the cluster. For information about the valid values, see [Cluster states](https://help.aliyun.com/document_detail/99286.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The details of the nodes.
     *
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @description The type of the database engine.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The version of the database engine.
     *
     * @example 8.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The status of the minor version. Valid values:
     *
     *   **Stable**: The minor version is stable.
     *   **Old**: The minor version is outdated. We recommend that you upgrade the cluster to the latest version.
     *   **HighRisk**: The minor version has critical defects. We recommend that you immediately upgrade the cluster to the latest version.
     *
     * > For more information about how to upgrade the minor version, see [Upgrade versions](https://help.aliyun.com/document_detail/158572.html).
     * @example Stable
     *
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @description The total physical storage of level-1 backups (snapshots). Unit: bytes.
     *
     * @example 74448896
     *
     * @var int
     */
    public $dataLevel1BackupChainSize;

    /**
     * @description Indicates the rule of data replication. Valid values: AsyncSync: asynchronous. SemiSync: semi-synchronous.
     *
     * @example AsyncSync
     *
     * @var string
     */
    public $dataSyncMode;

    /**
     * @description Indicates whether the cluster is locked and can be deleted. Valid values:
     *
     *   **0**: The cluster is not locked and can be deleted.
     *   **1**: The cluster is locked and cannot be deleted.
     *
     * @example 0
     *
     * @var int
     */
    public $deletionLock;

    /**
     * @description The database type.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The time when the cluster expires.
     *
     * > A specific value will be returned only for subscription (**Prepaid**) clusters. For pay-as-you-go (**Postpaid**) clusters, an empty string will be returned.
     * @example 2020-11-14T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the cluster has expired. Valid values:
     *
     * > This parameter is returned only for subscription (**Prepaid**) clusters.
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description Indicates whether to replenish resources for the primary database after a cross-zone switchover. Valid values: true false
     *
     * @example false
     *
     * @var bool
     */
    public $hasCompleteStandbyRes;

    /**
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @description Maximum inodes in file system.
     *
     * @example 6,291,456
     *
     * @var int
     */
    public $inodeTotal;

    /**
     * @description The current inode usage.
     *
     * @example 4,194,304
     *
     * @var int
     */
    public $inodeUsed;

    /**
     * @description Indicates whether the kernel is of the latest version. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @description Indicates whether PolarProxy uses the latest version. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isProxyLatestVersion;

    /**
     * @description The lock mode. Valid values:
     *
     *   **Unlock**: The cluster is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The cluster is automatically locked due to cluster expiration.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The maintenance window of the cluster. The format is `HH:mmZ-HH:mmZ`. The time is displayed in UTC. For example, the value `16:00Z-17:00Z` indicates that the cluster can be maintained from 00:00 to 01:00 (UTC+08:00).
     *
     * @example 18:00Z-19:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $provisionedIops;

    /**
     * @description The number of CPU cores for PolarProxy.
     *
     * @example 4
     *
     * @var string
     */
    public $proxyCpuCores;

    /**
     * @description The type of the serverless PolarProxy. Valid value: AgileServerless.
     *
     * @example AgileServerless
     *
     * @var string
     */
    public $proxyServerlessType;

    /**
     * @description The number of CPU cores for PolarProxy Standard Enterprise Edition.
     *
     * @example 2
     *
     * @var string
     */
    public $proxyStandardCpuCores;

    /**
     * @description The status of PolarProxy. Valid values:
     *
     *   **Creating**: PolarProxy is being created.
     *   **Running**: PolarProxy is running.
     *   **Deleting**: PolarProxy is being released.
     *   **Rebooting**: PolarProxy is restarting.
     *   **DBNodeCreating**: PolarProxy is being added.
     *   **DBNodeDeleting**: PolarProxy is being deleted.
     *   **ClassChanging**: The specifications of PolarProxy are being changed.
     *   **NetAddressCreating**: The network connection is being created.
     *   **NetAddressDeleting**: The network connection is being deleted.
     *   **NetAddressModifying**: The network connection is being modified.
     *   **Deleted**: PolarProxy is released.
     *
     * @example Running
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @description The type of PolarProxy. Valid values:
     *
     *   **Exclusive**: Dedicated Enterprise Edition
     *   **General**: Standard Enterprise Edition
     *
     * @example Exclusive
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description The region ID of the security group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 074467EF-86B9-4C23-ACBF-E9B81A******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of your Alibaba Cloud resource group.
     *
     * @example rg-***************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The storage of SQL. Unit: bytes. If the value is -1, no data is stored.
     *
     * @example 0
     *
     * @var int
     */
    public $SQLSize;

    /**
     * @description The type of the serverless cluster. Only **AgileServerless** can be returned.
     *
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description Indicates whether the cross-zone disaster recovery feature is enabled. Valid values: ON OFF 0: Customer Drill Mode
     *
     * @example OFF
     *
     * @var string
     */
    public $standbyHAMode;

    /**
     * @description The maximum storage capacity of the current cluster specification. Unit: bytes.
     *
     * @example 10995116277760
     *
     * @var int
     */
    public $storageMax;

    /**
     * @description The billing method of the storage. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription.
     *
     * @example Prepaid
     *
     * @var string
     */
    public $storagePayType;

    /**
     * @description The storage space that uses the subscription billing method. Unit: bytes.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSpace;

    /**
     * @description The storage type. Set the value to **HighPerformance**.
     *
     * @example HighPerformance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The storage space consumed by the cluster. Unit: bytes.
     *
     * @example 3012558848
     *
     * @var int
     */
    public $storageUsed;

    /**
     * @description Indicates whether the multi-zone data consistency feature is enabled for the cluster. Valid values:
     *
     *   **ON**: Multi-zone data consistency is enabled, which is suitable for Standard Edition clusters that run Multi-zone Edition.
     *   **OFF**
     *
     * @example ON
     *
     * @var string
     */
    public $strictConsistency;

    /**
     * @description The specification type of the compute node. Valid values:
     *
     *   **Exclusive**: dedicated.
     *   **General**: general-purpose.
     *
     * > This parameter is supported only for PolarDB for MySQL clusters of Cluster Edition.
     * @example Exclusive
     *
     * @var string
     */
    public $subCategory;

    /**
     * @var string
     */
    public $supportInstantSwitchWithImci;

    /**
     * @description Details about the tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The VPC ID of the cluster.
     *
     * @example vpc-*******************
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-*********************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * @example cn-hangzhou-i,cn-hangzhou-g
     *
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'aiCreatingTime'               => 'AiCreatingTime',
        'aiType'                       => 'AiType',
        'architecture'                 => 'Architecture',
        'blktagTotal'                  => 'BlktagTotal',
        'blktagUsed'                   => 'BlktagUsed',
        'category'                     => 'Category',
        'compressStorageMode'          => 'CompressStorageMode',
        'compressStorageUsed'          => 'CompressStorageUsed',
        'creationTime'                 => 'CreationTime',
        'DBClusterDescription'         => 'DBClusterDescription',
        'DBClusterId'                  => 'DBClusterId',
        'DBClusterNetworkType'         => 'DBClusterNetworkType',
        'DBClusterStatus'              => 'DBClusterStatus',
        'DBNodes'                      => 'DBNodes',
        'DBType'                       => 'DBType',
        'DBVersion'                    => 'DBVersion',
        'DBVersionStatus'              => 'DBVersionStatus',
        'dataLevel1BackupChainSize'    => 'DataLevel1BackupChainSize',
        'dataSyncMode'                 => 'DataSyncMode',
        'deletionLock'                 => 'DeletionLock',
        'engine'                       => 'Engine',
        'expireTime'                   => 'ExpireTime',
        'expired'                      => 'Expired',
        'hasCompleteStandbyRes'        => 'HasCompleteStandbyRes',
        'hotStandbyCluster'            => 'HotStandbyCluster',
        'inodeTotal'                   => 'InodeTotal',
        'inodeUsed'                    => 'InodeUsed',
        'isLatestVersion'              => 'IsLatestVersion',
        'isProxyLatestVersion'         => 'IsProxyLatestVersion',
        'lockMode'                     => 'LockMode',
        'maintainTime'                 => 'MaintainTime',
        'payType'                      => 'PayType',
        'provisionedIops'              => 'ProvisionedIops',
        'proxyCpuCores'                => 'ProxyCpuCores',
        'proxyServerlessType'          => 'ProxyServerlessType',
        'proxyStandardCpuCores'        => 'ProxyStandardCpuCores',
        'proxyStatus'                  => 'ProxyStatus',
        'proxyType'                    => 'ProxyType',
        'regionId'                     => 'RegionId',
        'requestId'                    => 'RequestId',
        'resourceGroupId'              => 'ResourceGroupId',
        'SQLSize'                      => 'SQLSize',
        'serverlessType'               => 'ServerlessType',
        'standbyHAMode'                => 'StandbyHAMode',
        'storageMax'                   => 'StorageMax',
        'storagePayType'               => 'StoragePayType',
        'storageSpace'                 => 'StorageSpace',
        'storageType'                  => 'StorageType',
        'storageUsed'                  => 'StorageUsed',
        'strictConsistency'            => 'StrictConsistency',
        'subCategory'                  => 'SubCategory',
        'supportInstantSwitchWithImci' => 'SupportInstantSwitchWithImci',
        'tags'                         => 'Tags',
        'VPCId'                        => 'VPCId',
        'vSwitchId'                    => 'VSwitchId',
        'zoneIds'                      => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->blktagTotal) {
            $res['BlktagTotal'] = $this->blktagTotal;
        }
        if (null !== $this->blktagUsed) {
            $res['BlktagUsed'] = $this->blktagUsed;
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
            $res['DBNodes'] = [];
            if (null !== $this->DBNodes && \is_array($this->DBNodes)) {
                $n = 0;
                foreach ($this->DBNodes as $item) {
                    $res['DBNodes'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
        }
        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDBClusterAttributeResponseBody
     */
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
        if (isset($map['BlktagTotal'])) {
            $model->blktagTotal = $map['BlktagTotal'];
        }
        if (isset($map['BlktagUsed'])) {
            $model->blktagUsed = $map['BlktagUsed'];
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
                $n              = 0;
                foreach ($map['DBNodes'] as $item) {
                    $model->DBNodes[$n++] = null !== $item ? DBNodes::fromMap($item) : $item;
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
        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
        }
        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
