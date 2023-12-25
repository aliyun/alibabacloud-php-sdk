<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The site ID. Valid values:
     *
     *   **26842**: the China site (aliyun.com)
     *   **26888**: the international site (alibabacloud.com)
     *
     * @example 26842
     *
     * @var string
     */
    public $bid;

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
    public $category;

    /**
     * @description The commodity code of the cluster.
     *
     * @example clickhouse_go_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The VPC endpoint of the cluster.
     *
     * @example cc-bp1fs5o051c61****.clickhouse.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The version number of the backend management system of ApsaraDB for ClickHouse. Valid values:
     *
     *   **v1**
     *   **v2**
     *
     * @example v1
     *
     * @var string
     */
    public $controlVersion;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2021-10-28T07:24:45Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The cluster ID.
     *
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster. Only VPC is supported.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The state of the cluster. Valid values:
     *
     *   **Preparing**: The cluster is being prepared.
     *   **Creating**: The cluster is being created.
     *   **Running**: The cluster is running.
     *   **Deleting**: The cluster is being deleted.
     *   **SCALING_OUT**: The storage capacity of the cluster is being expanded.
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The specifications of the cluster.
     *
     *   Valid values when the cluster is of Single-replica Edition: -**S4**: 4 CPU cores and 16 GB of memory -**S8**: 8 CPU cores and 32 GB of memory
     *
     *   **S16**: 16 CPU cores and 64 GB of memory
     *   **S32**: 32 CPU cores and 128 GB of memory
     *   **S64**: 64 CPU cores and 256 GB of memory
     *   **S104**: 104 CPU cores and 384 GB of memory
     *
     *   Valid values when the cluster is of Double-replica Edition: -**C4**: 4 CPU cores and 16 GB of memory -**C8**: 8 CPU cores and 32 GB of memory -**C16**: 16 CPU cores and 64 GB of memory -**C32**: 32 CPU cores and 128 GB of memory -**C64**: 64 CPU cores and 256 GB of memory -**C104**: 104 CPU cores and 384 GB of memory
     *
     * @example C8
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The number of nodes.
     *
     *   Valid values when the cluster is of Single-replica Edition: 1 to 48.
     *   Valid values when the cluster is of Double-replica Edition: 1 to 24.
     *
     * @example 2
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @description The storage capacity of each node. Valid values: 100 to 32000. Unit: GB.
     *
     * >  This value is a multiple of 100.
     * @example 100
     *
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @description The time when the cluster expired. The time is in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * >  Pay-as-you-go clusters never expire. If the cluster is a pay-as-you-go cluster, an empty string is returned for this parameter.
     * @example 2011-05-30T12:11:4Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The extended storage space.
     *
     * @example 100GB
     *
     * @var int
     */
    public $extStorageSize;

    /**
     * @description The extended storage type. Valid values:
     *
     *   **CloudSSD**: standard SSD.
     *   **CloudESSD**: The cluster uses an enhanced SSD (ESSD) of performance level (PL) 1.
     *   **CloudESSD_PL2**: The cluster uses an ESSD of PL 2.
     *   **CloudESSD_PL3**: The cluster uses an ESSD of PL 3.
     *   **CloudEfficiency**: The cluster uses an ultra disk.
     *
     * @example CloudESSD
     *
     * @var string
     */
    public $extStorageType;

    /**
     * @description Indicates whether the cluster has expired. Valid values:
     *
     *   **true**: The cluster has expired.
     *   **false**: The cluster has not expired.
     *
     * @example false
     *
     * @var string
     */
    public $isExpired;

    /**
     * @description The lock mode of the cluster. Valid values:
     *
     *   **Unlock**: The cluster is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The cluster is automatically locked due to cluster expiration.
     *   **LockByRestoration**: The cluster is automatically locked because the cluster is about to be rolled back.
     *   **LockByDiskQuota**: The cluster is automatically locked because the disk space is exhausted.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The cause why the cluster was locked.
     *
     * >  If the value of the LockMode parameter is Unlock, an empty string is returned for this parameter.
     * @example DISK_FULL
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: The cluster uses the pay-as-you-go billing method.
     *   **Prepaid**: The cluster uses the subscription billing method.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The HTTP port number.
     *
     * @example 8123
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID.
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
     * @description The status of a data migration task.
     *
     * @var scaleOutStatus
     */
    public $scaleOutStatus;

    /**
     * @description The storage type of the cluster. Valid values:
     *
     *   **CloudESSD**: The cluster uses an enhanced SSD (ESSD) of performance level (PL) 1.
     *   **CloudESSD_PL2**: The cluster uses an ESSD of PL 2.
     *   **CloudESSD_PL3**: The cluster uses an ESSD of PL 3.
     *   **CloudEfficiency**: The cluster uses an ultra disk.
     *
     * @example CloudESSD
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC in which the cluster is deployed.
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the cluster is deployed.
     *
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'               => 'AliUid',
        'bid'                  => 'Bid',
        'category'             => 'Category',
        'commodityCode'        => 'CommodityCode',
        'connectionString'     => 'ConnectionString',
        'controlVersion'       => 'ControlVersion',
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBNodeClass'          => 'DBNodeClass',
        'DBNodeCount'          => 'DBNodeCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'expireTime'           => 'ExpireTime',
        'extStorageSize'       => 'ExtStorageSize',
        'extStorageType'       => 'ExtStorageType',
        'isExpired'            => 'IsExpired',
        'lockMode'             => 'LockMode',
        'lockReason'           => 'LockReason',
        'payType'              => 'PayType',
        'port'                 => 'Port',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'scaleOutStatus'       => 'ScaleOutStatus',
        'storageType'          => 'StorageType',
        'tags'                 => 'Tags',
        'vSwitchId'            => 'VSwitchId',
        'vpcCloudInstanceId'   => 'VpcCloudInstanceId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->controlVersion) {
            $res['ControlVersion'] = $this->controlVersion;
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
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->extStorageSize) {
            $res['ExtStorageSize'] = $this->extStorageSize;
        }
        if (null !== $this->extStorageType) {
            $res['ExtStorageType'] = $this->extStorageType;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scaleOutStatus) {
            $res['ScaleOutStatus'] = null !== $this->scaleOutStatus ? $this->scaleOutStatus->toMap() : null;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ControlVersion'])) {
            $model->controlVersion = $map['ControlVersion'];
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
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExtStorageSize'])) {
            $model->extStorageSize = $map['ExtStorageSize'];
        }
        if (isset($map['ExtStorageType'])) {
            $model->extStorageType = $map['ExtStorageType'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScaleOutStatus'])) {
            $model->scaleOutStatus = scaleOutStatus::fromMap($map['ScaleOutStatus']);
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
