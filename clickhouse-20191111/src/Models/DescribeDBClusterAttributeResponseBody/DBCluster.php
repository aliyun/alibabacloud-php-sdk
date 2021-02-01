<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBClusterType;

    /**
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @var string
     */
    public $category;

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
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var int
     */
    public $DBNodeCount;

    /**
     * @var string
     */
    public $createTime;

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
    public $expireTime;

    /**
     * @var string
     */
    public $isExpired;

    /**
     * @var string
     */
    public $maintainTime;

    /**
     * @var string
     */
    public $vpcId;

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
    public $commodityCode;

    /**
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $publicConnectionString;

    /**
     * @var string
     */
    public $publicPort;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var int
     */
    public $port;

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
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var scaleOutStatus
     */
    public $scaleOutStatus;
    protected $_name = [
        'regionId'               => 'RegionId',
        'zoneId'                 => 'ZoneId',
        'DBClusterId'            => 'DBClusterId',
        'DBClusterType'          => 'DBClusterType',
        'DBClusterDescription'   => 'DBClusterDescription',
        'category'               => 'Category',
        'lockMode'               => 'LockMode',
        'lockReason'             => 'LockReason',
        'payType'                => 'PayType',
        'DBClusterStatus'        => 'DBClusterStatus',
        'DBNodeStorage'          => 'DBNodeStorage',
        'DBNodeClass'            => 'DBNodeClass',
        'DBNodeCount'            => 'DBNodeCount',
        'createTime'             => 'CreateTime',
        'engine'                 => 'Engine',
        'engineVersion'          => 'EngineVersion',
        'expireTime'             => 'ExpireTime',
        'isExpired'              => 'IsExpired',
        'maintainTime'           => 'MaintainTime',
        'vpcId'                  => 'VpcId',
        'vSwitchId'              => 'VSwitchId',
        'vpcCloudInstanceId'     => 'VpcCloudInstanceId',
        'commodityCode'          => 'CommodityCode',
        'DBClusterNetworkType'   => 'DBClusterNetworkType',
        'storageType'            => 'StorageType',
        'publicConnectionString' => 'PublicConnectionString',
        'publicPort'             => 'PublicPort',
        'connectionString'       => 'ConnectionString',
        'port'                   => 'Port',
        'aliUid'                 => 'AliUid',
        'bid'                    => 'Bid',
        'encryptionKey'          => 'EncryptionKey',
        'encryptionType'         => 'EncryptionType',
        'tags'                   => 'Tags',
        'scaleOutStatus'         => 'ScaleOutStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterType) {
            $res['DBClusterType'] = $this->DBClusterType;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
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
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }
        if (null !== $this->DBNodeCount) {
            $res['DBNodeCount'] = $this->DBNodeCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->publicPort) {
            $res['PublicPort'] = $this->publicPort;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->scaleOutStatus) {
            $res['ScaleOutStatus'] = null !== $this->scaleOutStatus ? $this->scaleOutStatus->toMap() : null;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterType'])) {
            $model->DBClusterType = $map['DBClusterType'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
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
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }
        if (isset($map['DBNodeCount'])) {
            $model->DBNodeCount = $map['DBNodeCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['PublicPort'])) {
            $model->publicPort = $map['PublicPort'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ScaleOutStatus'])) {
            $model->scaleOutStatus = scaleOutStatus::fromMap($map['ScaleOutStatus']);
        }

        return $model;
    }
}
