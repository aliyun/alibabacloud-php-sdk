<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\tags;
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
     * @description The billing method of the cluster. Valid values:
     *
     *   **ads**: pay-as-you-go.
     *   **ads_pre**: subscription.
     *
     * @example ads
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The specifications of computing resources that are used by the cluster in elastic mode. The increase of computing resources can speed up queries. You can adjust the value of this parameter to scale the cluster.
     *
     * @example 8Core32GB
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The Virtual Private Cloud (VPC) endpoint of the cluster.
     *
     * @example am-bp111m2cfrdl1****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The time when the cluster was created. The time follows the ISO 8601 standard in the *yyyy-MM-ddTHH:mm:ssZ* format. The time is displayed in UTC.
     *
     * @example 2021-04-01T09:50:18Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the cluster.
     *
     * @example adb_test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * @example am-bp111m2cfrdl1****
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
     * @description The ESSD performance level.
     *
     * @example PL1
     *
     * @var string
     */
    public $diskPerformanceLevel;

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
     * > For more information about ESSDs, see [ESSD specifications](~~122389~~).
     * @example cloud_essd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The ID of the Data Transmission Service (DTS) synchronization task. This parameter is returned only for MySQL analytic instances.
     *
     * @example dtsb1hp3790****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The number of elastic I/O units (EIUs).
     *
     * @example 2
     *
     * @var int
     */
    public $elasticIOResource;

    /**
     * @description The single-node specifications of an EIU. Valid values:
     *
     *   8Core64GB: If this value is returned, an EIU of the cluster has 24 cores and 192 GB memory.
     *   12Core96GB: If this value is returned, an EIU of the cluster has 36 cores and 288 GB memory.
     *
     * @example 8Core64GB
     *
     * @var string
     */
    public $elasticIOResourceSize;

    /**
     * @description Indicates whether an Airflow cluster was created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableAirflow;

    /**
     * @description Indicates whether a Spark cluster was created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableSpark;

    /**
     * @description The engine of the cluster. **AnalyticDB** is returned.
     *
     * @example AnalyticDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The minor version of the cluster.
     *
     * @example 3.1.1.9
     *
     * @var string
     */
    public $engineVersion;

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
     * @description The public IP address.
     *
     * @example 10.1.XX.XX
     *
     * @var string
     */
    public $innerIp;

    /**
     * @description The public port number.
     *
     * @example 3306
     *
     * @var string
     */
    public $innerPort;

    /**
     * @description The ID of the key that is used to encrypt disk data.
     *
     * > This parameter is returned only when disk encryption is enabled.
     * @example e1935511-cf88-1123-a0f8-1be8d251****
     *
     * @var string
     */
    public $kmsId;

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
     * > This parameter is returned only when the cluster was locked. The value is **instance_expire**.
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maintenance window of the cluster. The window is in the *HH:mmZ-HH:mmZ* format. The time is displayed in UTC. Example: *04:00Z-05:00Z*, which indicates that routine maintenance can be performed from 04:00 to 05:00.
     *
     * > For more information about maintenance windows, see [Configure a maintenance window](~~122569~~).
     * @example 04:00Z-05:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The mode of the cluster. Valid values:
     *
     *   **flexible**: elastic mode.
     *   **reserver**: reserved mode.
     *
     * > For more information about cluster modes, see [Editions](~~205001~~).
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
     * @description The port number that is used to connect to the cluster.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the ApsaraDB RDS instance from which data is synchronized to the cluster. This parameter is returned only for MySQL analytic instances.
     *
     * @example rm-bp837jsdp2****
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
     * @description The specifications of storage resources that are used by the cluster in elastic mode. These resources are used to read and write data. You can increase the value of this parameter to improve the read and write performance of the cluster.
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
     * @description Indicates whether Elastic Network Interface (ENI) is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $userENIStatus;

    /**
     * @description The ID of the cluster that resides in the VPC.
     *
     * @example am-bp111m2cfrdl1****-controller
     *
     * @var string
     */
    public $VPCCloudInstanceId;

    /**
     * @description The VPC ID of the cluster.
     *
     * @example vpc-bp13h7uzhulpuxvnp****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-bp1syh8vvw8yech7n****
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
        'category'              => 'Category',
        'commodityCode'         => 'CommodityCode',
        'computeResource'       => 'ComputeResource',
        'connectionString'      => 'ConnectionString',
        'creationTime'          => 'CreationTime',
        'DBClusterDescription'  => 'DBClusterDescription',
        'DBClusterId'           => 'DBClusterId',
        'DBClusterNetworkType'  => 'DBClusterNetworkType',
        'DBClusterStatus'       => 'DBClusterStatus',
        'DBClusterType'         => 'DBClusterType',
        'DBNodeClass'           => 'DBNodeClass',
        'DBNodeCount'           => 'DBNodeCount',
        'DBNodeStorage'         => 'DBNodeStorage',
        'DBVersion'             => 'DBVersion',
        'diskPerformanceLevel'  => 'DiskPerformanceLevel',
        'diskType'              => 'DiskType',
        'dtsJobId'              => 'DtsJobId',
        'elasticIOResource'     => 'ElasticIOResource',
        'elasticIOResourceSize' => 'ElasticIOResourceSize',
        'enableAirflow'         => 'EnableAirflow',
        'enableSpark'           => 'EnableSpark',
        'engine'                => 'Engine',
        'engineVersion'         => 'EngineVersion',
        'executorCount'         => 'ExecutorCount',
        'expireTime'            => 'ExpireTime',
        'expired'               => 'Expired',
        'innerIp'               => 'InnerIp',
        'innerPort'             => 'InnerPort',
        'kmsId'                 => 'KmsId',
        'lockMode'              => 'LockMode',
        'lockReason'            => 'LockReason',
        'maintainTime'          => 'MaintainTime',
        'mode'                  => 'Mode',
        'payType'               => 'PayType',
        'port'                  => 'Port',
        'rdsInstanceId'         => 'RdsInstanceId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'storageResource'       => 'StorageResource',
        'tags'                  => 'Tags',
        'userENIStatus'         => 'UserENIStatus',
        'VPCCloudInstanceId'    => 'VPCCloudInstanceId',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
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
        if (null !== $this->diskPerformanceLevel) {
            $res['DiskPerformanceLevel'] = $this->diskPerformanceLevel;
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
        if (null !== $this->elasticIOResourceSize) {
            $res['ElasticIOResourceSize'] = $this->elasticIOResourceSize;
        }
        if (null !== $this->enableAirflow) {
            $res['EnableAirflow'] = $this->enableAirflow;
        }
        if (null !== $this->enableSpark) {
            $res['EnableSpark'] = $this->enableSpark;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->kmsId) {
            $res['KmsId'] = $this->kmsId;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
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
        if (null !== $this->userENIStatus) {
            $res['UserENIStatus'] = $this->userENIStatus;
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
        if (isset($map['DiskPerformanceLevel'])) {
            $model->diskPerformanceLevel = $map['DiskPerformanceLevel'];
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
        if (isset($map['ElasticIOResourceSize'])) {
            $model->elasticIOResourceSize = $map['ElasticIOResourceSize'];
        }
        if (isset($map['EnableAirflow'])) {
            $model->enableAirflow = $map['EnableAirflow'];
        }
        if (isset($map['EnableSpark'])) {
            $model->enableSpark = $map['EnableSpark'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['KmsId'])) {
            $model->kmsId = $map['KmsId'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
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
        if (isset($map['UserENIStatus'])) {
            $model->userENIStatus = $map['UserENIStatus'];
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
