<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponseBody\items;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClustersResponseBody\items\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @description The edition of the cluster. Valid values:
     *
     *   **BASIC**: reserved mode for Basic Edition.
     *   **CLUSTER**: reserved mode for Cluster Edition.
     *   **MIXED_STORAGE**: elastic mode for Cluster Edition.
     *
     * > For more information about cluster editions, see [Editions](~~205001~~).
     * @example MIXED_STORAGE
     *
     * @var string
     */
    public $category;

    /**
     * @description The commodity code. **ads** is returned.
     *
     * @example ads
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The specifications of computing resources that are used in the cluster in elastic mode. The increase of computing resources can speed up queries. You can adjust the value of this parameter to scale the cluster.
     *
     * @example 8Core32GB
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The public endpoint that is used to connect to the cluster.
     *
     * @example am-bp163885f8q21****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC. Example: *2021-04-01T09:50:18Z*.
     *
     * @example 2021-04-01T09:50:18Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the cluster.
     *
     * @example adb_test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The cluster ID.
     *
     * @example am-bp163885f8q21****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster. **VPC** is returned.
     *
     * @example vpc
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The state of the cluster. For more information, see [Cluster states](~~143075~~).
     *
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **Common**: common cluster.
     *   **RDS_ANALYSIS**: MySQL analytic instance.
     *
     * @example Common
     *
     * @var string
     */
    public $DBClusterType;

    /**
     * @description The instance type of the cluster.
     *
     * @example E8
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @description The number of node groups.
     *
     * @example 1
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @description The storage capacity of the cluster. Unit: GB.
     *
     * @example 300
     *
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @description The version of the database engine. **3.0** is returned.
     *
     * @example 3.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @description The disk type of the cluster. Valid values:
     *
     *   **local_ssd**: local disk.
     *   **cloud**: basic disk.
     *   **cloud_ssd**: standard SSD.
     *   **cloud_efficiency**: ultra disk.
     *   **cloud_essd**: PL1 enhanced SSD (ESSD).
     *   **cloud_essd2**: PL2 ESSD.
     *   **cloud_essd3**: PL3 ESSD.
     *
     * > For more information, see [ESSDs](~~122389~~).
     * @example cloud_essd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the Data Transmission Service (DTS) synchronization task. This parameter is returned only for MySQL analytic instances.
     *
     * @example dtsb1578j90XXXX
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The number of elastic I/O units (EIUs). For more information, see [Use EIUs to scale up storage resources](~~189505~~).
     *
     * > This parameter is returned only for clusters in elastic mode.
     * @example 0
     *
     * @var int
     */
    public $elasticIOResource;

    /**
     * @description The engine of the cluster. **AnalyticDB** is returned.
     *
     * @example AnalyticDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The number of compute nodes that are used by the cluster in elastic mode.
     *
     * @example 1
     *
     * @var string
     */
    public $executorCount;

    /**
     * @description The time when the cluster expires. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC. Example: *2999-09-08T16:00:00Z*.
     *
     * >
     *
     *   If the billing method of the cluster is subscription, the actual expiration time is returned.
     *
     *   If the billing method of the cluster is pay-as-you-go, **2999-09-08T16:00:00Z** is returned.
     *
     * @example 2999-09-08T16:00:00Z
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
     * @example false
     *
     * @var string
     */
    public $expired;

    /**
     * @description The public IP address of the cluster.
     *
     * @example 10.1.xx.xx
     *
     * @var string
     */
    public $innerIp;

    /**
     * @description The port number that is used to connect to the cluster.
     *
     * @example 3306
     *
     * @var string
     */
    public $innerPort;

    /**
     * @description The lock mode of the cluster. Valid values:
     *
     *   **Unlock**: The cluster is not locked.
     *   **ManualLock**: The cluster is manually locked.
     *   **LockByExpiration**: The cluster is automatically locked due to cluster expiration.
     *   **LockByRestoration**: The cluster is automatically locked due to cluster restoration.
     *   **LockByDiskQuota**: The cluster is automatically locked when it has used 90% of its storage.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the cluster is locked.
     *
     * > This parameter is returned only when the cluster was locked. **instance_expire** is returned.
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The mode of the cluster. Valid values:
     *
     *   **flexible**: elastic mode.
     *   **reserver**: reserved mode.
     *
     * >
     *
     *   For more information about cluster modes, see [Editions](~~205001~~).
     *
     * @example flexible
     *
     * @var string
     */
    public $mode;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port number that is used to connect to the cluster. Default value: 3306.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the ApsaraDB RDS instance from which data is synchronized to the cluster. This parameter is returned only for MySQL analytic instances.
     *
     * @example rm-bp11q28kvl688****
     *
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmyiu4ekp****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specifications of storage resources that are used in the cluster in elastic mode. These resources are used to read and write data. You can increase the value of this parameter to improve the read and write performance of the cluster.
     *
     * @example 8Core32GB
     *
     * @var string
     */
    public $storageResource;

    /**
     * @description The tags that are added to the cluster.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the cluster that is deployed in the VPC.
     *
     * @example am-bp163885f8q21****-controller
     *
     * @var string
     */
    public $VPCCloudInstanceId;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * @example vpc-bp13h7uzhulpuxvnpXXXX
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-bp1syh8vvw8yech7nXXXX
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'             => 'Category',
        'commodityCode'        => 'CommodityCode',
        'computeResource'      => 'ComputeResource',
        'connectionString'     => 'ConnectionString',
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus'      => 'DBClusterStatus',
        'DBClusterType'        => 'DBClusterType',
        'DBNodeClass'          => 'DBNodeClass',
        'DBNodeCount'          => 'DBNodeCount',
        'DBNodeStorage'        => 'DBNodeStorage',
        'DBVersion'            => 'DBVersion',
        'diskType'             => 'DiskType',
        'dtsJobId'             => 'DtsJobId',
        'elasticIOResource'    => 'ElasticIOResource',
        'engine'               => 'Engine',
        'executorCount'        => 'ExecutorCount',
        'expireTime'           => 'ExpireTime',
        'expired'              => 'Expired',
        'innerIp'              => 'InnerIp',
        'innerPort'            => 'InnerPort',
        'lockMode'             => 'LockMode',
        'lockReason'           => 'LockReason',
        'mode'                 => 'Mode',
        'payType'              => 'PayType',
        'port'                 => 'Port',
        'rdsInstanceId'        => 'RdsInstanceId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'storageResource'      => 'StorageResource',
        'tags'                 => 'Tags',
        'VPCCloudInstanceId'   => 'VPCCloudInstanceId',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
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
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
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
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->elasticIOResource) {
            $res['ElasticIOResource'] = $this->elasticIOResource;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->executorCount) {
            $res['ExecutorCount'] = $this->executorCount;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->innerIp) {
            $res['InnerIp'] = $this->innerIp;
        }
        if (null !== $this->innerPort) {
            $res['InnerPort'] = $this->innerPort;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->VPCCloudInstanceId) {
            $res['VPCCloudInstanceId'] = $this->VPCCloudInstanceId;
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

    /**
     * @param array $map
     *
     * @return DBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
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
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
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
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['ElasticIOResource'])) {
            $model->elasticIOResource = $map['ElasticIOResource'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ExecutorCount'])) {
            $model->executorCount = $map['ExecutorCount'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['InnerIp'])) {
            $model->innerIp = $map['InnerIp'];
        }
        if (isset($map['InnerPort'])) {
            $model->innerPort = $map['InnerPort'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VPCCloudInstanceId'])) {
            $model->VPCCloudInstanceId = $map['VPCCloudInstanceId'];
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
