<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterAttributeResponseBody\items\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $enableSpark;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $expired;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $enableAirflow;

    /**
     * @var string
     */
    public $executorCount;

    /**
     * @var string
     */
    public $storageResource;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @var string
     */
    public $DBClusterType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $computeResource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $elasticIOResource;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $VPCCloudInstanceId;

    /**
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var bool
     */
    public $userENIStatus;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $kmsId;
    protected $_name = [
        'creationTime'         => 'CreationTime',
        'enableSpark'          => 'EnableSpark',
        'dtsJobId'             => 'DtsJobId',
        'DBNodeCount'          => 'DBNodeCount',
        'expired'              => 'Expired',
        'maintainTime'         => 'MaintainTime',
        'payType'              => 'PayType',
        'diskType'             => 'DiskType',
        'tags'                 => 'Tags',
        'mode'                 => 'Mode',
        'port'                 => 'Port',
        'lockMode'             => 'LockMode',
        'engineVersion'        => 'EngineVersion',
        'enableAirflow'        => 'EnableAirflow',
        'executorCount'        => 'ExecutorCount',
        'storageResource'      => 'StorageResource',
        'DBClusterId'          => 'DBClusterId',
        'connectionString'     => 'ConnectionString',
        'rdsInstanceId'        => 'RdsInstanceId',
        'DBClusterType'        => 'DBClusterType',
        'commodityCode'        => 'CommodityCode',
        'expireTime'           => 'ExpireTime',
        'DBNodeStorage'        => 'DBNodeStorage',
        'DBNodeClass'          => 'DBNodeClass',
        'lockReason'           => 'LockReason',
        'VPCId'                => 'VPCId',
        'computeResource'      => 'ComputeResource',
        'regionId'             => 'RegionId',
        'elasticIOResource'    => 'ElasticIOResource',
        'vSwitchId'            => 'VSwitchId',
        'DBVersion'            => 'DBVersion',
        'VPCCloudInstanceId'   => 'VPCCloudInstanceId',
        'DBClusterStatus'      => 'DBClusterStatus',
        'resourceGroupId'      => 'ResourceGroupId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterDescription' => 'DBClusterDescription',
        'userENIStatus'        => 'UserENIStatus',
        'zoneId'               => 'ZoneId',
        'category'             => 'Category',
        'engine'               => 'Engine',
        'kmsId'                => 'KmsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->enableSpark) {
            $res['EnableSpark'] = $this->enableSpark;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->enableAirflow) {
            $res['EnableAirflow'] = $this->enableAirflow;
        }
        if (null !== $this->executorCount) {
            $res['ExecutorCount'] = $this->executorCount;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->elasticIOResource) {
            $res['ElasticIOResource'] = $this->elasticIOResource;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->VPCCloudInstanceId) {
            $res['VPCCloudInstanceId'] = $this->VPCCloudInstanceId;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->userENIStatus) {
            $res['UserENIStatus'] = $this->userENIStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->kmsId) {
            $res['KmsId'] = $this->kmsId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['EnableSpark'])) {
            $model->enableSpark = $map['EnableSpark'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['EnableAirflow'])) {
            $model->enableAirflow = $map['EnableAirflow'];
        }
        if (isset($map['ExecutorCount'])) {
            $model->executorCount = $map['ExecutorCount'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ElasticIOResource'])) {
            $model->elasticIOResource = $map['ElasticIOResource'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['VPCCloudInstanceId'])) {
            $model->VPCCloudInstanceId = $map['VPCCloudInstanceId'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['UserENIStatus'])) {
            $model->userENIStatus = $map['UserENIStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['KmsId'])) {
            $model->kmsId = $map['KmsId'];
        }

        return $model;
    }
}
