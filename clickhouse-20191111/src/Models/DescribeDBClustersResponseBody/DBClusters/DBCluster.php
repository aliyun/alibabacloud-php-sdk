<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClustersResponseBody\DBClusters\DBCluster\tags;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $aliUid;
    /**
     * @var string
     */
    public $bid;
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
    public $connectionString;
    /**
     * @var string
     */
    public $controlVersion;
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
    public $DBNodeCount;
    /**
     * @var int
     */
    public $DBNodeStorage;
    /**
     * @var string
     */
    public $dbVersion;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var int
     */
    public $extStorageSize;
    /**
     * @var string
     */
    public $extStorageType;
    /**
     * @var string
     */
    public $isExpired;
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
    public $payType;
    /**
     * @var int
     */
    public $port;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $scaleOutDisableWriteWindows;
    /**
     * @var scaleOutStatus
     */
    public $scaleOutStatus;
    /**
     * @var string
     */
    public $storageType;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
     * @var string
     */
    public $vpcCloudInstanceId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'                      => 'AliUid',
        'bid'                         => 'Bid',
        'category'                    => 'Category',
        'commodityCode'               => 'CommodityCode',
        'connectionString'            => 'ConnectionString',
        'controlVersion'              => 'ControlVersion',
        'createTime'                  => 'CreateTime',
        'DBClusterDescription'        => 'DBClusterDescription',
        'DBClusterId'                 => 'DBClusterId',
        'DBClusterNetworkType'        => 'DBClusterNetworkType',
        'DBClusterStatus'             => 'DBClusterStatus',
        'DBNodeClass'                 => 'DBNodeClass',
        'DBNodeCount'                 => 'DBNodeCount',
        'DBNodeStorage'               => 'DBNodeStorage',
        'dbVersion'                   => 'DbVersion',
        'expireTime'                  => 'ExpireTime',
        'extStorageSize'              => 'ExtStorageSize',
        'extStorageType'              => 'ExtStorageType',
        'isExpired'                   => 'IsExpired',
        'lockMode'                    => 'LockMode',
        'lockReason'                  => 'LockReason',
        'payType'                     => 'PayType',
        'port'                        => 'Port',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'scaleOutDisableWriteWindows' => 'ScaleOutDisableWriteWindows',
        'scaleOutStatus'              => 'ScaleOutStatus',
        'storageType'                 => 'StorageType',
        'tags'                        => 'Tags',
        'vSwitchId'                   => 'VSwitchId',
        'vpcCloudInstanceId'          => 'VpcCloudInstanceId',
        'vpcId'                       => 'VpcId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->scaleOutStatus) {
            $this->scaleOutStatus->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
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

        if (null !== $this->scaleOutDisableWriteWindows) {
            $res['ScaleOutDisableWriteWindows'] = $this->scaleOutDisableWriteWindows;
        }

        if (null !== $this->scaleOutStatus) {
            $res['ScaleOutStatus'] = null !== $this->scaleOutStatus ? $this->scaleOutStatus->toArray($noStream) : $this->scaleOutStatus;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
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

        if (isset($map['ScaleOutDisableWriteWindows'])) {
            $model->scaleOutDisableWriteWindows = $map['ScaleOutDisableWriteWindows'];
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
