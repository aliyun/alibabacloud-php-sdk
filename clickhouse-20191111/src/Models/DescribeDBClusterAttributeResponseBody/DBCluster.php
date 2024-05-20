<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\tags;
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
     * @description The scheduled restart time. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in Coordinated Universal Time (UTC).
     *
     * @example 2023-11-06T12:00:00Z
     *
     * @var string
     */
    public $appointmentRestartTime;

    /**
     * @var mixed[]
     */
    public $availableUpgradeMajorVersion;

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
     * @example HighAvailability
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
     * @example cc-bp1qx68m06981****.ads.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The version of the ApsaraDB for ClickHouse console that is used to manage the cluster. Valid values:
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
     * @description The time when the cluster was created. The value is in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-12-13T11:33:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the cluster.
     *
     * @example cc-bp108z124a8o7****
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
     * @example vpc
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The cluster state. Valid values:
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
     * @description The type of the cluster. Valid values:
     *
     *   **Common**: a common cluster
     *   **Readonly**: a read-only cluster
     *   **Guard**: a disaster recovery cluster
     *
     * @example Common
     *
     * @var string
     */
    public $DBClusterType;

    /**
     * @description The specifications of the cluster.
     *
     *   Valid values when the cluster is of Single-replica Edition:
     *
     *   **S4-NEW**
     *   **S8**
     *   **S16**
     *   **S32**
     *   **S64**
     *   **S104**
     *
     *   Valid values when the cluster is of Double-replica Edition:
     *
     *   **C4-NEW**
     *   **C8**
     *   **C16**
     *   **C32**
     *   **C64**
     *   **C104**
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
     * @example 1
     *
     * @var int
     */
    public $DBNodeCount;

    /**
     * @description The storage capacity of a single node of the cluster. Unit: GB.
     *
     * >  This value is a multiple of 100.
     * @example 100
     *
     * @var int
     */
    public $DBNodeStorage;

    /**
     * @description The Key Management Service (KMS) key that is used to encrypt data.
     *
     * >  If the value of the EncryptionType parameter is off, an empty string is returned for this parameter.
     * @example 685f416f-87c9-4554-8d3a-75b6ce25****
     *
     * @var string
     */
    public $encryptionKey;

    /**
     * @description The encryption type. Valid values:
     *
     *   **CloudDisk**: Disk encryption is enabled.
     *   **off**: Data is not encrypted.
     *
     * @example CloudDisk
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description The type of the database engine.
     *
     * @example ClickHouse
     *
     * @var string
     */
    public $engine;

    /**
     * @description The latest minor version to which the cluster can be updated.
     *
     * @example 1.34.0
     *
     * @var string
     */
    public $engineLatestMinorVersion;

    /**
     * @description The current minor version.
     *
     * @example 1.6.0
     *
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @description The engine version.
     *
     * @example 21.8.10.19
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the cluster expired. The time is in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * >  Pay-as-you-go clusters never expire. If the cluster is a pay-as-you-go cluster, an empty string is returned for this parameter.
     * @example 2022-11-11T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The extended storage space. Unit: GB.
     *
     * @example 500
     *
     * @var int
     */
    public $extStorageSize;

    /**
     * @description The extended storage type. Valid values:
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
    public $extStorageType;

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
     * @description The update type. If the value of the parameter is **false**, it indicates a manual update.
     *
     * @example false
     *
     * @var bool
     */
    public $maintainAutoType;

    /**
     * @description The maintenance window of the cluster. The value is in the HH:mmZ-HH:mmZ format. The time is displayed in UTC.
     *
     * For example, if you set the maintenance window to 00:00Z-01:00Z, the cluster can be maintained from 08:00 (UTC+8) to 09:00 (UTC+8).
     * @example 00:00Z-01:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: indicates the pay-as-you-go billing method.
     *   **Prepaid**: indicates the subscription billing method.
     *
     * @example Prepaid
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
     * @description The public endpoint.
     *
     * @example cc-bp1199ya710s7****.public.clickhouse.ads.aliyuncs.com
     *
     * @var string
     */
    public $publicConnectionString;

    /**
     * @description The IP address that is used to connect to the cluster over the Internet.
     *
     * @example 121.40.xx.xx
     *
     * @var string
     */
    public $publicIpAddr;

    /**
     * @description The TCP port number in the public endpoint.
     *
     * @example 3306
     *
     * @var string
     */
    public $publicPort;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmyf65je6****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the data migration task.
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
     * @description Indicates whether data backup is supported. Valid values:
     *
     *   **1**: Data backup is supported.
     *   **2**: Data backup is not supported.
     *
     * @example 1
     *
     * @var int
     */
    public $supportBackup;

    /**
     * @description Indicates whether HTTPS ports are supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $supportHttpsPort;

    /**
     * @description Indicates whether the cluster supports a MySQL port. Valid values:
     *
     *   **true**: A MySQL port is supported.
     *   **false**: A MySQL port is not supported.
     *
     * @example false
     *
     * @var bool
     */
    public $supportMysqlPort;

    /**
     * @description Indicates whether tiered storage of hot data and cold data is supported. Valid values:
     *
     *   **1**: Tiered storage of hot data and cold data is supported.
     *   **2**: Tiered storage of hot data and cold data is not supported.
     *
     * @example 1
     *
     * @var int
     */
    public $supportOss;

    /**
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1n874li1t5y57wi****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC in which the cluster is deployed.
     *
     * @example vpc-bp10tr8k9qasioaty****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-bp10tr8k9qasioaty****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The IP address that is used to connect to the cluster over the VPC.
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $vpcIpAddr;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The list of vSwitch IDs in multi-zone clusters.
     *
     * @example cn-shanghai-f: vsw-zm0n42d5vvuo****
     *
     * @var mixed[]
     */
    public $zoneIdVswitchMap;

    /**
     * @description The ZooKeeper specifications.
     *
     * @example 4 Core 8 GB
     *
     * @var string
     */
    public $zookeeperClass;
    protected $_name = [
        'aliUid'                       => 'AliUid',
        'appointmentRestartTime'       => 'AppointmentRestartTime',
        'availableUpgradeMajorVersion' => 'AvailableUpgradeMajorVersion',
        'bid'                          => 'Bid',
        'category'                     => 'Category',
        'commodityCode'                => 'CommodityCode',
        'connectionString'             => 'ConnectionString',
        'controlVersion'               => 'ControlVersion',
        'createTime'                   => 'CreateTime',
        'DBClusterDescription'         => 'DBClusterDescription',
        'DBClusterId'                  => 'DBClusterId',
        'DBClusterNetworkType'         => 'DBClusterNetworkType',
        'DBClusterStatus'              => 'DBClusterStatus',
        'DBClusterType'                => 'DBClusterType',
        'DBNodeClass'                  => 'DBNodeClass',
        'DBNodeCount'                  => 'DBNodeCount',
        'DBNodeStorage'                => 'DBNodeStorage',
        'encryptionKey'                => 'EncryptionKey',
        'encryptionType'               => 'EncryptionType',
        'engine'                       => 'Engine',
        'engineLatestMinorVersion'     => 'EngineLatestMinorVersion',
        'engineMinorVersion'           => 'EngineMinorVersion',
        'engineVersion'                => 'EngineVersion',
        'expireTime'                   => 'ExpireTime',
        'extStorageSize'               => 'ExtStorageSize',
        'extStorageType'               => 'ExtStorageType',
        'isExpired'                    => 'IsExpired',
        'lockMode'                     => 'LockMode',
        'lockReason'                   => 'LockReason',
        'maintainAutoType'             => 'MaintainAutoType',
        'maintainTime'                 => 'MaintainTime',
        'payType'                      => 'PayType',
        'port'                         => 'Port',
        'publicConnectionString'       => 'PublicConnectionString',
        'publicIpAddr'                 => 'PublicIpAddr',
        'publicPort'                   => 'PublicPort',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'scaleOutStatus'               => 'ScaleOutStatus',
        'storageType'                  => 'StorageType',
        'supportBackup'                => 'SupportBackup',
        'supportHttpsPort'             => 'SupportHttpsPort',
        'supportMysqlPort'             => 'SupportMysqlPort',
        'supportOss'                   => 'SupportOss',
        'tags'                         => 'Tags',
        'vSwitchId'                    => 'VSwitchId',
        'vpcCloudInstanceId'           => 'VpcCloudInstanceId',
        'vpcId'                        => 'VpcId',
        'vpcIpAddr'                    => 'VpcIpAddr',
        'zoneId'                       => 'ZoneId',
        'zoneIdVswitchMap'             => 'ZoneIdVswitchMap',
        'zookeeperClass'               => 'ZookeeperClass',
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
        if (null !== $this->availableUpgradeMajorVersion) {
            $res['AvailableUpgradeMajorVersion'] = $this->availableUpgradeMajorVersion;
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
        if (isset($map['AvailableUpgradeMajorVersion'])) {
            $model->availableUpgradeMajorVersion = $map['AvailableUpgradeMajorVersion'];
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
