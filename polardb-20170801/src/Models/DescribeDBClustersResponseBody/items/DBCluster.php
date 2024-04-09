<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @description The type of the AI node. Valid values:
     *
     *   SearchNode: search node.
     *   DLNode: AI node.
     *
     * @example SearchNode
     *
     * @var string
     */
    public $aiType;

    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **Normal**: Cluster Edition
     *   **Basic**: Single Node Edition
     *   **Archive**: X-Engine Edition
     *   **NormalMultimaster**: Multi-master Cluster (Database/Table)
     *
     * @example Normal
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2020-08-14T05:58:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the cluster.
     *
     * @example GDN-1
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the cluster.
     *
     * @example pc-****************
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
     * @description The status of the cluster.
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The specifications of the node.
     *
     * @example polar.mysql.x4.large
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The number of nodes.
     *
     * @example 2
     *
     * @var int
     */
    public $DBNodeNumber;

    /**
     * @description The nodes of the cluster.
     *
     * @var DBNodes
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
     * @description The version of the database.
     *
     * @example 5.6
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description Indicates whether the cluster is protected from deletion. Valid values:
     *
     *   **0**: The cluster is not locked.
     *   **1**: The cluster is locked.
     *
     * > You cannot delete clusters that are locked.
     * @example 0
     *
     * @var int
     */
    public $deletionLock;

    /**
     * @description The engine of the cluster.
     *
     * @example POLARDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The expiration time of the cluster.
     *
     * > A specific value is returned only for subscription (**Prepaid**) clusters. For pay-as-you-go (**Postpaid**) clusters, an empty string is returned.
     * @example 2020-11-14T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Indicates whether the cluster has expired. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > A specific value is returned only for subscription (**Prepaid**) clusters.
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description The lock state of the cluster. Valid values:
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
     * @var string
     */
    public $memorySize;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the region in which the node resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remoteMemorySize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the cluster is a serverless cluster. **AgileServerless** indicates a serverless cluster. An empty value indicates a common cluster.
     *
     * @example AgileServerless
     *
     * @var string
     */
    public $serverlessType;

    /**
     * @description The billing method of the storage space. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $storagePayType;

    /**
     * @description The storage capacity that is billed based on the subscription billing method. Unit: byte.
     *
     * @example 50
     *
     * @var int
     */
    public $storageSpace;

    /**
     * @description The storage space this is occupied by the cluster. Unit: bytes.
     *
     * @example 3009413120
     *
     * @var int
     */
    public $storageUsed;

    /**
     * @description Indicates whether multi-zone data consistency is enabled for the cluster. Valid values:
     *
     *   **ON**: multi-zone data consistency is enabled, which is suitable for Standard Edition clusters of Multi-zone Edition.
     *   **OFF**: multi-zone data consistency is disabled.
     *
     * @example ON
     *
     * @var string
     */
    public $strictConsistency;

    /**
     * @var string
     */
    public $subCategory;

    /**
     * @description The tags of the cluster.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The VPC ID of the cluster.
     *
     * @example vpc-****************
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-***************
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aiType'               => 'AiType',
        'category'             => 'Category',
        'cpuCores'             => 'CpuCores',
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBNodeClass'          => 'DBNodeClass',
        'DBNodeNumber'         => 'DBNodeNumber',
        'DBNodes'              => 'DBNodes',
        'DBType'               => 'DBType',
        'DBVersion'            => 'DBVersion',
        'deletionLock'         => 'DeletionLock',
        'engine'               => 'Engine',
        'expireTime'           => 'ExpireTime',
        'expired'              => 'Expired',
        'lockMode'             => 'LockMode',
        'memorySize'           => 'MemorySize',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'remoteMemorySize'     => 'RemoteMemorySize',
        'resourceGroupId'      => 'ResourceGroupId',
        'serverlessType'       => 'ServerlessType',
        'storagePayType'       => 'StoragePayType',
        'storageSpace'         => 'StorageSpace',
        'storageUsed'          => 'StorageUsed',
        'strictConsistency'    => 'StrictConsistency',
        'subCategory'          => 'SubCategory',
        'tags'                 => 'Tags',
        'vpcId'                => 'VpcId',
        'vswitchId'            => 'VswitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiType) {
            $res['AiType'] = $this->aiType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeNumber) {
            $res['DBNodeNumber'] = $this->DBNodeNumber;
        }
        if (null !== $this->DBNodes) {
            $res['DBNodes'] = null !== $this->DBNodes ? $this->DBNodes->toMap() : null;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
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
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteMemorySize) {
            $res['RemoteMemorySize'] = $this->remoteMemorySize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverlessType) {
            $res['ServerlessType'] = $this->serverlessType;
        }
        if (null !== $this->storagePayType) {
            $res['StoragePayType'] = $this->storagePayType;
        }
        if (null !== $this->storageSpace) {
            $res['StorageSpace'] = $this->storageSpace;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiType'])) {
            $model->aiType = $map['AiType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeNumber'])) {
            $model->DBNodeNumber = $map['DBNodeNumber'];
        }
        if (isset($map['DBNodes'])) {
            $model->DBNodes = DBNodes::fromMap($map['DBNodes']);
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
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
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteMemorySize'])) {
            $model->remoteMemorySize = $map['RemoteMemorySize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerlessType'])) {
            $model->serverlessType = $map['ServerlessType'];
        }
        if (isset($map['StoragePayType'])) {
            $model->storagePayType = $map['StoragePayType'];
        }
        if (isset($map['StorageSpace'])) {
            $model->storageSpace = $map['StorageSpace'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
