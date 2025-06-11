<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\scaleOutStatus;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeDBClusterAttributeResponseBody\DBCluster\tags;

class DBCluster extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var bool
     */
    public $appointmentElectZookeeperDisableWrite;

    /**
     * @var string
     */
    public $appointmentElectZookeeperTime;

    /**
     * @var string
     */
    public $appointmentRestartNodeList;

    /**
     * @var string
     */
    public $appointmentRestartNodeTime;

    /**
     * @var string
     */
    public $appointmentRestartTime;

    /**
     * @var mixed[]
     */
    public $availableUpgradeMajorVersion;

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
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineLatestMinorVersion;

    /**
     * @var string
     */
    public $engineMinorVersion;

    /**
     * @var string
     */
    public $engineVersion;

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
     * @var bool
     */
    public $maintainAutoType;

    /**
     * @var string
     */
    public $maintainTime;

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
    public $publicConnectionString;

    /**
     * @var string
     */
    public $publicIpAddr;

    /**
     * @var string
     */
    public $publicPort;

    /**
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
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $supportBackup;

    /**
     * @var bool
     */
    public $supportHttpsPort;

    /**
     * @var bool
     */
    public $supportMysqlPort;

    /**
     * @var int
     */
    public $supportOss;

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
    public $vpcIpAddr;

    /**
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
        'aliUid' => 'AliUid',
        'appointmentElectZookeeperDisableWrite' => 'AppointmentElectZookeeperDisableWrite',
        'appointmentElectZookeeperTime' => 'AppointmentElectZookeeperTime',
        'appointmentRestartNodeList' => 'AppointmentRestartNodeList',
        'appointmentRestartNodeTime' => 'AppointmentRestartNodeTime',
        'appointmentRestartTime' => 'AppointmentRestartTime',
        'availableUpgradeMajorVersion' => 'AvailableUpgradeMajorVersion',
        'bid' => 'Bid',
        'category' => 'Category',
        'commodityCode' => 'CommodityCode',
        'connectionString' => 'ConnectionString',
        'controlVersion' => 'ControlVersion',
        'createTime' => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId' => 'DBClusterId',
        'DBClusterNetworkType' => 'DBClusterNetworkType',
        'DBClusterStatus' => 'DBClusterStatus',
        'DBClusterType' => 'DBClusterType',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeCount' => 'DBNodeCount',
        'DBNodeStorage' => 'DBNodeStorage',
        'encryptionKey' => 'EncryptionKey',
        'encryptionType' => 'EncryptionType',
        'engine' => 'Engine',
        'engineLatestMinorVersion' => 'EngineLatestMinorVersion',
        'engineMinorVersion' => 'EngineMinorVersion',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'extStorageSize' => 'ExtStorageSize',
        'extStorageType' => 'ExtStorageType',
        'isExpired' => 'IsExpired',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainAutoType' => 'MaintainAutoType',
        'maintainTime' => 'MaintainTime',
        'payType' => 'PayType',
        'port' => 'Port',
        'publicConnectionString' => 'PublicConnectionString',
        'publicIpAddr' => 'PublicIpAddr',
        'publicPort' => 'PublicPort',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'scaleOutStatus' => 'ScaleOutStatus',
        'storageType' => 'StorageType',
        'supportBackup' => 'SupportBackup',
        'supportHttpsPort' => 'SupportHttpsPort',
        'supportMysqlPort' => 'SupportMysqlPort',
        'supportOss' => 'SupportOss',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
        'vpcId' => 'VpcId',
        'vpcIpAddr' => 'VpcIpAddr',
        'zoneId' => 'ZoneId',
        'zoneIdVswitchMap' => 'ZoneIdVswitchMap',
        'zookeeperClass' => 'ZookeeperClass',
    ];

    public function validate()
    {
        if (\is_array($this->availableUpgradeMajorVersion)) {
            Model::validateArray($this->availableUpgradeMajorVersion);
        }
        if (null !== $this->scaleOutStatus) {
            $this->scaleOutStatus->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (\is_array($this->zoneIdVswitchMap)) {
            Model::validateArray($this->zoneIdVswitchMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->appointmentElectZookeeperDisableWrite) {
            $res['AppointmentElectZookeeperDisableWrite'] = $this->appointmentElectZookeeperDisableWrite;
        }

        if (null !== $this->appointmentElectZookeeperTime) {
            $res['AppointmentElectZookeeperTime'] = $this->appointmentElectZookeeperTime;
        }

        if (null !== $this->appointmentRestartNodeList) {
            $res['AppointmentRestartNodeList'] = $this->appointmentRestartNodeList;
        }

        if (null !== $this->appointmentRestartNodeTime) {
            $res['AppointmentRestartNodeTime'] = $this->appointmentRestartNodeTime;
        }

        if (null !== $this->appointmentRestartTime) {
            $res['AppointmentRestartTime'] = $this->appointmentRestartTime;
        }

        if (null !== $this->availableUpgradeMajorVersion) {
            if (\is_array($this->availableUpgradeMajorVersion)) {
                $res['AvailableUpgradeMajorVersion'] = [];
                foreach ($this->availableUpgradeMajorVersion as $key1 => $value1) {
                    $res['AvailableUpgradeMajorVersion'][$key1] = $value1;
                }
            }
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
            $res['ScaleOutStatus'] = null !== $this->scaleOutStatus ? $this->scaleOutStatus->toArray($noStream) : $this->scaleOutStatus;
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

        if (null !== $this->vpcIpAddr) {
            $res['VpcIpAddr'] = $this->vpcIpAddr;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIdVswitchMap) {
            if (\is_array($this->zoneIdVswitchMap)) {
                $res['ZoneIdVswitchMap'] = [];
                foreach ($this->zoneIdVswitchMap as $key1 => $value1) {
                    $res['ZoneIdVswitchMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->zookeeperClass) {
            $res['ZookeeperClass'] = $this->zookeeperClass;
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

        if (isset($map['AppointmentElectZookeeperDisableWrite'])) {
            $model->appointmentElectZookeeperDisableWrite = $map['AppointmentElectZookeeperDisableWrite'];
        }

        if (isset($map['AppointmentElectZookeeperTime'])) {
            $model->appointmentElectZookeeperTime = $map['AppointmentElectZookeeperTime'];
        }

        if (isset($map['AppointmentRestartNodeList'])) {
            $model->appointmentRestartNodeList = $map['AppointmentRestartNodeList'];
        }

        if (isset($map['AppointmentRestartNodeTime'])) {
            $model->appointmentRestartNodeTime = $map['AppointmentRestartNodeTime'];
        }

        if (isset($map['AppointmentRestartTime'])) {
            $model->appointmentRestartTime = $map['AppointmentRestartTime'];
        }

        if (isset($map['AvailableUpgradeMajorVersion'])) {
            if (!empty($map['AvailableUpgradeMajorVersion'])) {
                $model->availableUpgradeMajorVersion = [];
                foreach ($map['AvailableUpgradeMajorVersion'] as $key1 => $value1) {
                    $model->availableUpgradeMajorVersion[$key1] = $value1;
                }
            }
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
            if (!empty($map['ZoneIdVswitchMap'])) {
                $model->zoneIdVswitchMap = [];
                foreach ($map['ZoneIdVswitchMap'] as $key1 => $value1) {
                    $model->zoneIdVswitchMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['ZookeeperClass'])) {
            $model->zookeeperClass = $map['ZookeeperClass'];
        }

        return $model;
    }
}
