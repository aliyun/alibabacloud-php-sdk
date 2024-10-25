<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterAttributeResponseBody extends Model
{
    /**
     * @description Start time for free AI activation
     *
     * @example 2024-03-13T01:20:28Z
     *
     * @var string
     */
    public $aiCreatingTime;

    /**
     * @description Types of AI nodes. Values include:
     *
     * - **SearchNode**: Search node.
     * - **DLNode**: AI node.
     * @example DLNode
     *
     * @var string
     */
    public $aiType;

    /**
     * @description CPU architecture. Available options are:
     * - **X86**
     * - **ARM**
     * @example X86
     *
     * @var string
     */
    public $architecture;

    /**
     * @description Maximum number of blktags in the file system.
     *
     * @example 7,864,320
     *
     * @var int
     */
    public $blktagTotal;

    /**
     * @description Current blktag usage.
     *
     * @example 5,242,880
     *
     * @var int
     */
    public $blktagUsed;

    /**
     * @description [Product Series](https://help.aliyun.com/document_detail/183258.html), with values as follows:
     * **Normal**: Cluster Edition
     * **Basic**: Single Node
     * **Archive**: High Compression Engine (X-Engine)
     * **NormalMultimaster**: Multi-Master Cluster Edition
     * **SENormal**: Standard Edition
     *
     * > * PolarDB PostgreSQL version 11 does not support single-node.
     * >* PolarDB MySQL versions 8.0 and 5.7, and PolarDB PostgreSQL version 14 support the Standard Edition.
     * >* PolarDB MySQL version 8.0 supports High Compression Engine (X-Engine) and Multi-Master Cluster Edition.
     * @example Normal
     *
     * @var string
     */
    public $category;

    /**
     * @description Whether storage compression is enabled. Values are as follows:
     * - OFF: Disabled
     * @example ON
     *
     * @var string
     */
    public $compressStorageMode;

    /**
     * @description Compressed storage data size.
     * > This parameter is supported only when the cluster\\"s storage compression feature is enabled.
     * @example 15529410560
     *
     * @var int
     */
    public $compressStorageUsed;

    /**
     * @description Cluster creation time.
     *
     * @example 2020-08-14T05:58:42Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Cluster description.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description Cluster ID.
     *
     * @example pc-*****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Network type of the cluster.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description Cluster status. For the full list of values, refer to [Cluster Status Table](https://help.aliyun.com/document_detail/99286.html).
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The information about the nodes.
     *
     * @var DBNodes[]
     */
    public $DBNodes;

    /**
     * @description Database engine type.
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description Database engine version.
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
     *   **Old**: The minor version is outdated. We recommend that you update it to the latest version.
     *   **HighRisk**: The minor version has critical defects. We recommend that you immediately update it to the latest version.
     *   **Beta**: The minor version is a Beta version.
     *
     * >  For information about how to update the minor version, see [Minor version update](https://help.aliyun.com/document_detail/158572.html).
     * @example Stable
     *
     * @var string
     */
    public $DBVersionStatus;

    /**
     * @description Total size of Level 1 backups (snapshots), in bytes.
     *
     * @example 74448896
     *
     * @var int
     */
    public $dataLevel1BackupChainSize;

    /**
     * @description Data replication relationship mode. Values are as follows:
     * - **AsyncSync**: Asynchronous
     * - **SemiSync**: Semi-synchronous
     * @example AsyncSync
     *
     * @var string
     */
    public $dataSyncMode;

    /**
     * @description Lock status for cluster deletion, with values as follows:
     * **0**: Unlocked, cluster can be deleted.
     * **1**: Locked, cluster cannot be deleted.
     *
     * @example 0
     *
     * @var int
     */
    public $deletionLock;

    /**
     * @description Cluster engine.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description Cluster expiration time.
     *
     * > Only clusters with **Prepaid** (subscription) payment methods return specific parameter values; **Postpaid** (pay-as-you-go) clusters return empty values.
     * @example 2020-11-14T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Whether the cluster has expired.
     * > This parameter is only supported for clusters with **Prepaid** (Subscription) payment methods.
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description Whether to replenish resources for the new primary after cross-AZ switch. Values are as follows:
     * - **true**: Yes
     * - **false**: No
     * @example false
     *
     * @var bool
     */
    public $hasCompleteStandbyRes;

    /**
     * @description Whether to enable storage hot backup cluster (and Standby compute nodes). Values are as follows:
     * - **StandbyClusterON**: Enable storage hot backup/Enable storage hot backup and Standby compute nodes.
     * - **StandbyClusterOFF**: Disable storage hot backup/Disable storage hot backup and Standby compute nodes.
     * @example StandbyClusterON
     *
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @var string
     */
    public $imciAutoIndex;

    /**
     * @description Maximum number of inodes in the file system.
     *
     * @example 6,291,456
     *
     * @var int
     */
    public $inodeTotal;

    /**
     * @description Current inode usage.
     *
     * @example 4,194,304
     *
     * @var int
     */
    public $inodeUsed;

    /**
     * @description Indicates whether it is the latest kernel version. Values are as follows:
     *
     * - **true**: Yes
     *
     * - **false**: No
     * @example false
     *
     * @var bool
     */
    public $isLatestVersion;

    /**
     * @description Indicates whether it is the latest version of the database proxy, with possible values as follows:
     *
     * - **true**: Yes
     * - **false**: No
     * @example false
     *
     * @var bool
     */
    public $isProxyLatestVersion;

    /**
     * @description Lock mode. Possible values are as follows:
     *
     * - **Unlock**: Unlocked.
     * - **ManualLock**: Manually triggered lock.
     * - **LockByExpiration**: Automatic cluster lock upon expiration.
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The maintenance window for the cluster, formatted as `HH:mmZ-HH:mmZ` (UTC time). For example, `16:00Z-17:00Z` indicates that routine maintenance can be performed from 0:00 to 1:00 (UTC+08:00).
     *
     * @example 18:00Z-19:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description Orca function with possible values as follows:
     *
     * - **on**: Enabled
     *
     * - **off**: Disabled
     * @example ON
     *
     * @var string
     */
    public $orca;

    /**
     * @description Payment type. Possible values are:
     *
     * - **Postpaid**: Pay-As-You-Go
     * - **Prepaid**: Prepaid (Subscription).
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description Describes the preconfigured read and write IOPS for ESSD AutoPL cloud disks. Possible values: 0 to min{50,000, 1000*capacity - baseline performance}.<br>Baseline performance = min{1,800 + 50*capacity, 50000}.<br>Note: This parameter is supported only when StorageType is ESSDAUTOPL.
     *
     * @example 2500
     *
     * @var string
     */
    public $provisionedIops;

    /**
     * @description Number of CPU cores for the database proxy.
     *
     * @example 4
     *
     * @var string
     */
    public $proxyCpuCores;

    /**
     * @description Serverless type for the database proxy. Currently, the value is fixed to AgileServerless.
     *
     * @example AgileServerless
     *
     * @var string
     */
    public $proxyServerlessType;

    /**
     * @description Standard configuration CPU cores for the database proxy.
     *
     * @example 2
     *
     * @var string
     */
    public $proxyStandardCpuCores;

    /**
     * @description Status of the database proxy. Possible values include:
     *
     * - **Creating**: Creating
     * - **Running**: Running
     * - **Deleting**: Releasing
     * - **Rebooting**: Restarting
     * - **DBNodeCreating**: Adding nodes
     * - **DBNodeDeleting**: Deleting nodes
     * - **ClassChanging**: Changing node specifications
     * - **NetAddressCreating**: Creating network connections
     * - **NetAddressDeleting**: Deleting network connections
     * - **NetAddressModifying**: Modifying network connections
     * - **Deleted**: Released
     * @example Running
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @description Database proxy types, with the following values:
     *
     * - **Exclusive**: Enterprise Exclusive Edition
     * - **General**: Enterprise General Purpose Edition
     * @example Exclusive
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description Region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Request ID.
     *
     * @example 074467EF-86B9-4C23-ACBF-E9B81A******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Resource group ID.
     *
     * @example rg-***************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description If RestoreType is **RestoreByTime** or **RestoreByTimeOss**, this value represents the recovery time point. If RestoreType is **RestoreByBackupSet** or **RestoreByBackupSetOss**, this value indicates the ID of the backup set on which the recovery is based.
     * <note>Only clusters restored from a backup set or time point after June 1, 2024, support this parameter.</note>
     * @example 2179639137
     *
     * @var string
     */
    public $restoreDataPoint;

    /**
     * @description Cluster recovery method, with possible values:
     * **RestoreByTime**: Restore from a time point based on primary backup. * **RestoreByBackupSet**: Restore from a backup set based on primary backup. * **RestoreByTimeOss**: Restore from a time point based on secondary backup. * **RestoreByBackupSetOss**: Restore from a backup set based on secondary backup. * **CloneFromSourceCluster**: Clone from the source cluster.
     * <note>This parameter is only supported for clusters restored from a backup set or time point after June 1, 2024.</note>
     * @example RestoreByTime
     *
     * @var string
     */
    public $restoreType;

    /**
     * @description Storage amount of SQL, in bytes. If the value is -1, it indicates no data.
     *
     * @example 0
     *
     * @var int
     */
    public $SQLSize;

    /**
     * @description Serverless type. Valid values are as follows:
     * - AgileServerless: Agile - SteadyServerless: Stable
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description Source cluster ID. <note>Clusters restored from backup sets or specific points in time after June 1, 2024, support this parameter.</note>
     *
     * @example pc-pz51ziv48317b2880
     *
     * @var string
     */
    public $sourceDBCluster;

    /**
     * @description The region ID of the source cluster.
     *
     * >  This parameter is returned only if the source cluster ID exists.
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description Cross-AZ disaster recovery mode. Values are as follows:
     * - **ON**: Enable cross-AZ disaster recovery mode.
     * - **OFF**: Disable cross-AZ disaster recovery mode.
     * - **0**: Customer drill mode.
     * @example OFF
     *
     * @var string
     */
    public $standbyHAMode;

    /**
     * @description The maximum storage capacity of the current cluster specification, in bytes.
     *
     * @example 10995116277760
     *
     * @var int
     */
    public $storageMax;

    /**
     * @description Storage billing type. Valid values are as follows:
     * - **Postpaid**：Pay-as-you-go (by capacity). - **Prepaid**：Subscription (by space).
     * @example Prepaid
     *
     * @var string
     */
    public $storagePayType;

    /**
     * @description Storage space for pay-by-space (subscription) billing. Unit: Byte.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSpace;

    /**
     * @description Storage type, with a fixed value of **HighPerformance**.
     *
     * @example HighPerformance
     *
     * @var string
     */
    public $storageType;

    /**
     * @description Amount of used storage space, in bytes.
     *
     * @example 3012558848
     *
     * @var int
     */
    public $storageUsed;

    /**
     * @description Indicates whether multi-AZ data strong consistency is enabled for the cluster. The value ranges are as follows:
     * - **ON**: Indicates that multi-AZ data strong consistency is enabled, applicable to the Standard 3AZ scenario.
     * - **OFF**: Indicates that multi-AZ data strong consistency is not enabled.
     * @example ON
     *
     * @var string
     */
    public $strictConsistency;

    /**
     * @description Specification type of compute nodes, with possible values as follows:
     * **Exclusive**: Dedicated specification
     * **General**: General-purpose specification
     *
     * > This parameter is supported only for PolarDB MySQL Edition with the product series set to Cluster Edition.
     * @example Exclusive
     *
     * @var string
     */
    public $subCategory;

    /**
     * @description Indicates whether the failover with hot replica feature is supported if the cluster has In-Memory Column Index (IMCI) nodes.
     *
     * @example ON
     *
     * @var string
     */
    public $supportInstantSwitchWithImci;

    /**
     * @description Details of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description VPC ID.
     *
     * @example vpc-*******************
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description VSwitch ID.
     *
     * @example vsw-*********************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Availability Zone IDs.
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
        'imciAutoIndex'                => 'ImciAutoIndex',
        'inodeTotal'                   => 'InodeTotal',
        'inodeUsed'                    => 'InodeUsed',
        'isLatestVersion'              => 'IsLatestVersion',
        'isProxyLatestVersion'         => 'IsProxyLatestVersion',
        'lockMode'                     => 'LockMode',
        'maintainTime'                 => 'MaintainTime',
        'orca'                         => 'Orca',
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
        'restoreDataPoint'             => 'RestoreDataPoint',
        'restoreType'                  => 'RestoreType',
        'SQLSize'                      => 'SQLSize',
        'serverlessType'               => 'ServerlessType',
        'sourceDBCluster'              => 'SourceDBCluster',
        'sourceRegionId'               => 'SourceRegionId',
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
        if (null !== $this->imciAutoIndex) {
            $res['ImciAutoIndex'] = $this->imciAutoIndex;
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
        if (null !== $this->SQLSize) {
            $res['SQLSize'] = $this->SQLSize;
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
        if (isset($map['ImciAutoIndex'])) {
            $model->imciAutoIndex = $map['ImciAutoIndex'];
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
        if (isset($map['SQLSize'])) {
            $model->SQLSize = $map['SQLSize'];
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
