<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\tags;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\taskInfo;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $computeResource;

    /**
     * @var string
     */
    public $connectionString;

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
     * @var string
     */
    public $DBClusterType;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var bool
     */
    public $diskEncryption;

    /**
     * @var string
     */
    public $diskPerformanceLevel;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var int
     */
    public $elasticIOResource;

    /**
     * @var string
     */
    public $elasticIOResourceSize;

    /**
     * @var bool
     */
    public $enableAirflow;

    /**
     * @var bool
     */
    public $enableSpark;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $executorCount;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $innerIp;

    /**
     * @var string
     */
    public $innerPort;

    /**
     * @var string
     */
    public $kmsId;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $productForm;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reservedNodeCount;

    /**
     * @var string
     */
    public $reservedNodeSize;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $secondaryVSwitchId;

    /**
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $storageResource;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var taskInfo
     */
    public $taskInfo;

    /**
     * @var bool
     */
    public $userENIStatus;

    /**
     * @var string
     */
    public $VPCCloudInstanceId;

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
        'category' => 'Category',
        'commodityCode' => 'CommodityCode',
        'computeResource' => 'ComputeResource',
        'connectionString' => 'ConnectionString',
        'creationTime' => 'CreationTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBClusterType' => 'DBClusterType',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeCount' => 'DBNodeCount',
        'DBNodeStorage' => 'DBNodeStorage',
        'DBVersion' => 'DBVersion',
        'diskEncryption' => 'DiskEncryption',
        'diskPerformanceLevel' => 'DiskPerformanceLevel',
        'diskType' => 'DiskType',
        'dtsJobId' => 'DtsJobId',
        'elasticIOResource' => 'ElasticIOResource',
        'elasticIOResourceSize' => 'ElasticIOResourceSize',
        'enableAirflow' => 'EnableAirflow',
        'enableSpark' => 'EnableSpark',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'executorCount' => 'ExecutorCount',
        'expireTime' => 'ExpireTime',
        'expired' => 'Expired',
        'innerIp' => 'InnerIp',
        'innerPort' => 'InnerPort',
        'kmsId' => 'KmsId',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainTime' => 'MaintainTime',
        'mode' => 'Mode',
        'payType' => 'PayType',
        'port' => 'Port',
        'productForm' => 'ProductForm',
        'productVersion' => 'ProductVersion',
        'rdsInstanceId' => 'RdsInstanceId',
        'regionId' => 'RegionId',
        'reservedNodeCount' => 'ReservedNodeCount',
        'reservedNodeSize' => 'ReservedNodeSize',
        'resourceGroupId' => 'ResourceGroupId',
        'secondaryVSwitchId' => 'SecondaryVSwitchId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'storageResource' => 'StorageResource',
        'tags' => 'Tags',
        'taskInfo' => 'TaskInfo',
        'userENIStatus' => 'UserENIStatus',
        'VPCCloudInstanceId' => 'VPCCloudInstanceId',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->taskInfo) {
            $this->taskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->diskEncryption) {
            $res['DiskEncryption'] = $this->diskEncryption;
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

        if (null !== $this->productForm) {
            $res['ProductForm'] = $this->productForm;
        }

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }

        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reservedNodeCount) {
            $res['ReservedNodeCount'] = $this->reservedNodeCount;
        }

        if (null !== $this->reservedNodeSize) {
            $res['ReservedNodeSize'] = $this->reservedNodeSize;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->secondaryVSwitchId) {
            $res['SecondaryVSwitchId'] = $this->secondaryVSwitchId;
        }

        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }

        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toArray($noStream) : $this->taskInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DiskEncryption'])) {
            $model->diskEncryption = $map['DiskEncryption'];
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

        if (isset($map['ProductForm'])) {
            $model->productForm = $map['ProductForm'];
        }

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }

        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReservedNodeCount'])) {
            $model->reservedNodeCount = $map['ReservedNodeCount'];
        }

        if (isset($map['ReservedNodeSize'])) {
            $model->reservedNodeSize = $map['ReservedNodeSize'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecondaryVSwitchId'])) {
            $model->secondaryVSwitchId = $map['SecondaryVSwitchId'];
        }

        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }

        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
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
