<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\DBNodes;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponseBody\items\DBCluster\tags;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $aiType;
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $cpuCores;
    /**
     * @var string
     */
    public $createTime;
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
    public $DBNodeClass;
    /**
     * @var int
     */
    public $DBNodeNumber;
    /**
     * @var DBNodes
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
     * @var string
     */
    public $hotStandbyCluster;
    /**
     * @var string
     */
    public $lockMode;
    /**
     * @var string
     */
    public $memorySize;
    /**
     * @var string
     */
    public $payType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $remoteMemorySize;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $serverlessType;
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
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vswitchId;
    /**
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
        'hotStandbyCluster'    => 'HotStandbyCluster',
        'lockMode'             => 'LockMode',
        'memorySize'           => 'MemorySize',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'remoteMemorySize'     => 'RemoteMemorySize',
        'resourceGroupId'      => 'ResourceGroupId',
        'serverlessType'       => 'ServerlessType',
        'storagePayType'       => 'StoragePayType',
        'storageSpace'         => 'StorageSpace',
        'storageType'          => 'StorageType',
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
        if (null !== $this->DBNodes) {
            $this->DBNodes->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DBNodes'] = null !== $this->DBNodes ? $this->DBNodes->toArray($noStream) : $this->DBNodes;
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

        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
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
