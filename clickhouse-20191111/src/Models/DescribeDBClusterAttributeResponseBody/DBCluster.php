<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\tags;
use AlibabaCloud\Tea\Model;

class DBCluster extends Model
{
    /**
     * @example 140692647406****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $appointmentRestartTime;

    /**
     * @example 26842
     *
     * @var string
     */
    public $bid;

    /**
     * @example HighAvailability
     *
     * @var string
     */
    public $category;

    /**
     * @example clickhouse_go_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example cc-bp1qx68m06981****.ads.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @example v1
     *
     * @var string
     */
    public $controlVersion;

    /**
     * @example 2021-12-13T11:33:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example vpc
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @example Common
     *
     * @var string
     */
    public $DBClusterType;

    /**
     * @example C8
     *
     * @var string
     */
    public $DBNodeClass;

    /**
     * @example 1
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @example 685f416f-87c9-4554-8d3a-75b6ce25****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @example ClickHouse
     *
     * @var string
     */
    public $engine;

    /**
     * @example 1.34.0
     *
     * @var string
     */
    public $engineLatestMinorVersion;

    /**
     * @example 1.6.0
     *
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @example 21.8.10.19
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2022-11-11T16:00:00Z
     *
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
     * @example false
     *
     * @var string
     */
    public $isExpired;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example DISK_FULL
     *
     * @var string
     */
    public $lockReason;

    /**
     * @example false
     *
     * @var bool
     */
    public $maintainAutoType;

    /**
     * @example 00:00Z-01:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 8123
     *
     * @var int
     */
    public $port;

    /**
     * @example cc-bp1199ya710s7****.public.clickhouse.ads.aliyuncs.com
     *
     * @var string
     */
    public $publicConnectionString;

    /**
     * @example 121.40.xx.xx
     *
     * @var string
     */
    public $publicIpAddr;

    /**
     * @example 3306
     *
     * @var string
     */
    public $publicPort;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var scaleOutStatus
     */
    public $scaleOutStatus;

    /**
     * @example CloudESSD
     *
     * @var string
     */
    public $storageType;

    /**
     * @example 1
     *
     * @var int
     */
    public $supportBackup;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportHttpsPort;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportMysqlPort;

    /**
     * @example 1
     *
     * @var int
     */
    public $supportOss;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vsw-bp1n874li1t5y57wi****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp10tr8k9qasioaty****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description VPC ID。
     *
     * @example vpc-bp10tr8k9qasioaty****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $vpcIpAddr;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @var mixed[]
     */
    public $zoneIdVswitchMap;

    /**
     * @var string
     */
    public $zookeeperClass;
    protected $_name = [
        'aliUid'                   => 'AliUid',
        'appointmentRestartTime'   => 'AppointmentRestartTime',
        'bid'                      => 'Bid',
        'category'                 => 'Category',
        'commodityCode'            => 'CommodityCode',
        'connectionString'         => 'ConnectionString',
        'controlVersion'           => 'ControlVersion',
        'createTime'               => 'CreateTime',
        'DBClusterDescription'     => 'DBClusterDescription',
        'DBClusterId'              => 'DBClusterId',
        'DBClusterNetworkType'     => 'DBClusterNetworkType',
        'DBClusterStatus'          => 'DBClusterStatus',
        'DBClusterType'            => 'DBClusterType',
        'DBNodeClass'              => 'DBNodeClass',
        'DBNodeCount'              => 'DBNodeCount',
        'DBNodeStorage'            => 'DBNodeStorage',
        'encryptionKey'            => 'EncryptionKey',
        'encryptionType'           => 'EncryptionType',
        'engine'                   => 'Engine',
        'engineLatestMinorVersion' => 'EngineLatestMinorVersion',
        'engineMinorVersion'       => 'EngineMinorVersion',
        'engineVersion'            => 'EngineVersion',
        'expireTime'               => 'ExpireTime',
        'extStorageSize'           => 'ExtStorageSize',
        'extStorageType'           => 'ExtStorageType',
        'isExpired'                => 'IsExpired',
        'lockMode'                 => 'LockMode',
        'lockReason'               => 'LockReason',
        'maintainAutoType'         => 'MaintainAutoType',
        'maintainTime'             => 'MaintainTime',
        'payType'                  => 'PayType',
        'port'                     => 'Port',
        'publicConnectionString'   => 'PublicConnectionString',
        'publicIpAddr'             => 'PublicIpAddr',
        'publicPort'               => 'PublicPort',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'scaleOutStatus'           => 'ScaleOutStatus',
        'storageType'              => 'StorageType',
        'supportBackup'            => 'SupportBackup',
        'supportHttpsPort'         => 'SupportHttpsPort',
        'supportMysqlPort'         => 'SupportMysqlPort',
        'supportOss'               => 'SupportOss',
        'tags'                     => 'Tags',
        'vSwitchId'                => 'VSwitchId',
        'vpcCloudInstanceId'       => 'VpcCloudInstanceId',
        'vpcId'                    => 'VpcId',
        'vpcIpAddr'                => 'VpcIpAddr',
        'zoneId'                   => 'ZoneId',
        'zoneIdVswitchMap'         => 'ZoneIdVswitchMap',
        'zookeeperClass'           => 'ZookeeperClass',
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
        if (null !== $this->appointmentRestartTime) {
            $res['AppointmentRestartTime'] = $this->appointmentRestartTime;
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
        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineLatestMinorVersion) {
            $res['EngineLatestMinorVersion'] = $this->engineLatestMinorVersion;
        }
        if (null !== $this->engineMinorVersion) {
            $res['EngineMinorVersion'] = $this->engineMinorVersion;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
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
        if (null !== $this->maintainAutoType) {
            $res['MaintainAutoType'] = $this->maintainAutoType;
        }
        if (null !== $this->maintainTime) {
            $res['MaintainTime'] = $this->maintainTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->publicIpAddr) {
            $res['PublicIpAddr'] = $this->publicIpAddr;
        }
        if (null !== $this->publicPort) {
            $res['PublicPort'] = $this->publicPort;
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
        if (null !== $this->supportBackup) {
            $res['SupportBackup'] = $this->supportBackup;
        }
        if (null !== $this->supportHttpsPort) {
            $res['SupportHttpsPort'] = $this->supportHttpsPort;
        }
        if (null !== $this->supportMysqlPort) {
            $res['SupportMysqlPort'] = $this->supportMysqlPort;
        }
        if (null !== $this->supportOss) {
            $res['SupportOss'] = $this->supportOss;
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
        if (null !== $this->vpcIpAddr) {
            $res['VpcIpAddr'] = $this->vpcIpAddr;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneIdVswitchMap) {
            $res['ZoneIdVswitchMap'] = $this->zoneIdVswitchMap;
        }
        if (null !== $this->zookeeperClass) {
            $res['ZookeeperClass'] = $this->zookeeperClass;
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
        if (isset($map['AppointmentRestartTime'])) {
            $model->appointmentRestartTime = $map['AppointmentRestartTime'];
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
        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineLatestMinorVersion'])) {
            $model->engineLatestMinorVersion = $map['EngineLatestMinorVersion'];
        }
        if (isset($map['EngineMinorVersion'])) {
            $model->engineMinorVersion = $map['EngineMinorVersion'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
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
        if (isset($map['MaintainAutoType'])) {
            $model->maintainAutoType = $map['MaintainAutoType'];
        }
        if (isset($map['MaintainTime'])) {
            $model->maintainTime = $map['MaintainTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['PublicIpAddr'])) {
            $model->publicIpAddr = $map['PublicIpAddr'];
        }
        if (isset($map['PublicPort'])) {
            $model->publicPort = $map['PublicPort'];
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
        if (isset($map['SupportBackup'])) {
            $model->supportBackup = $map['SupportBackup'];
        }
        if (isset($map['SupportHttpsPort'])) {
            $model->supportHttpsPort = $map['SupportHttpsPort'];
        }
        if (isset($map['SupportMysqlPort'])) {
            $model->supportMysqlPort = $map['SupportMysqlPort'];
        }
        if (isset($map['SupportOss'])) {
            $model->supportOss = $map['SupportOss'];
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
        if (isset($map['VpcIpAddr'])) {
            $model->vpcIpAddr = $map['VpcIpAddr'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneIdVswitchMap'])) {
            $model->zoneIdVswitchMap = $map['ZoneIdVswitchMap'];
        }
        if (isset($map['ZookeeperClass'])) {
            $model->zookeeperClass = $map['ZookeeperClass'];
        }

        return $model;
    }
}
