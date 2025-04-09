<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\babelfishConfig;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\DBClusterNodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\serverlessConfig;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\slaveZones;

class DBInstanceAttribute extends Model
{
    /**
     * @var int
     */
    public $accountMaxQuantity;

    /**
     * @var string
     */
    public $advancedFeatures;

    /**
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @var string
     */
    public $availabilityValue;

    /**
     * @var babelfishConfig
     */
    public $babelfishConfig;

    /**
     * @var string
     */
    public $bpeEnabled;

    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @var bool
     */
    public $canTempUpgrade;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @var string
     */
    public $collation;

    /**
     * @var string
     */
    public $compressionMode;

    /**
     * @var string
     */
    public $compressionRatio;

    /**
     * @var string
     */
    public $connectionMode;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $consoleVersion;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @var DBClusterNodes
     */
    public $DBClusterNodes;

    /**
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceDiskUsed;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @var string
     */
    public $DBInstanceType;

    /**
     * @var int
     */
    public $DBMaxQuantity;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $disasterRecoveryInfo;

    /**
     * @var string
     */
    public $disasterRecoveryInstances;

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
     * @var extra
     */
    public $extra;

    /**
     * @var string
     */
    public $generalGroupName;

    /**
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $incrementSourceDBInstanceId;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $instructionSetArch;

    /**
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @var string
     */
    public $latestKernelVersion;

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
    public $masterInstanceId;

    /**
     * @var string
     */
    public $masterZone;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxIOMBPS;

    /**
     * @var int
     */
    public $maxIOPS;

    /**
     * @var bool
     */
    public $multipleTempUpgrade;

    /**
     * @var string
     */
    public $optimizedWritesInfo;

    /**
     * @var string
     */
    public $PGBouncerEnabled;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $proxyType;

    /**
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @var string
     */
    public $readOnlyStatus;

    /**
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

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
    public $securityIPList;

    /**
     * @var string
     */
    public $securityIPMode;

    /**
     * @var serverlessConfig
     */
    public $serverlessConfig;

    /**
     * @var slaveZones
     */
    public $slaveZones;

    /**
     * @var string
     */
    public $superPermissionMode;

    /**
     * @var bool
     */
    public $supportCompression;

    /**
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @var string
     */
    public $tempUpgradeTimeEnd;

    /**
     * @var string
     */
    public $tempUpgradeTimeStart;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var int
     */
    public $tipsLevel;

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

    /**
     * @var string
     */
    public $kindCode;
    protected $_name = [
        'accountMaxQuantity' => 'AccountMaxQuantity',
        'advancedFeatures' => 'AdvancedFeatures',
        'autoUpgradeMinorVersion' => 'AutoUpgradeMinorVersion',
        'availabilityValue' => 'AvailabilityValue',
        'babelfishConfig' => 'BabelfishConfig',
        'bpeEnabled' => 'BpeEnabled',
        'burstingEnabled' => 'BurstingEnabled',
        'canTempUpgrade' => 'CanTempUpgrade',
        'category' => 'Category',
        'coldDataEnabled' => 'ColdDataEnabled',
        'collation' => 'Collation',
        'compressionMode' => 'CompressionMode',
        'compressionRatio' => 'CompressionRatio',
        'connectionMode' => 'ConnectionMode',
        'connectionString' => 'ConnectionString',
        'consoleVersion' => 'ConsoleVersion',
        'creationTime' => 'CreationTime',
        'currentKernelVersion' => 'CurrentKernelVersion',
        'DBClusterNodes' => 'DBClusterNodes',
        'DBInstanceCPU' => 'DBInstanceCPU',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceClassType' => 'DBInstanceClassType',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceDiskUsed' => 'DBInstanceDiskUsed',
        'DBInstanceId' => 'DBInstanceId',
        'DBInstanceMemory' => 'DBInstanceMemory',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'DBInstanceType' => 'DBInstanceType',
        'DBMaxQuantity' => 'DBMaxQuantity',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'deletionProtection' => 'DeletionProtection',
        'disasterRecoveryInfo' => 'DisasterRecoveryInfo',
        'disasterRecoveryInstances' => 'DisasterRecoveryInstances',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'expireTime' => 'ExpireTime',
        'extra' => 'Extra',
        'generalGroupName' => 'GeneralGroupName',
        'guardDBInstanceId' => 'GuardDBInstanceId',
        'IPType' => 'IPType',
        'incrementSourceDBInstanceId' => 'IncrementSourceDBInstanceId',
        'instanceNetworkType' => 'InstanceNetworkType',
        'instructionSetArch' => 'InstructionSetArch',
        'ioAccelerationEnabled' => 'IoAccelerationEnabled',
        'latestKernelVersion' => 'LatestKernelVersion',
        'lockMode' => 'LockMode',
        'lockReason' => 'LockReason',
        'maintainTime' => 'MaintainTime',
        'masterInstanceId' => 'MasterInstanceId',
        'masterZone' => 'MasterZone',
        'maxConnections' => 'MaxConnections',
        'maxIOMBPS' => 'MaxIOMBPS',
        'maxIOPS' => 'MaxIOPS',
        'multipleTempUpgrade' => 'MultipleTempUpgrade',
        'optimizedWritesInfo' => 'OptimizedWritesInfo',
        'PGBouncerEnabled' => 'PGBouncerEnabled',
        'payType' => 'PayType',
        'port' => 'Port',
        'proxyType' => 'ProxyType',
        'readOnlyDBInstanceIds' => 'ReadOnlyDBInstanceIds',
        'readOnlyStatus' => 'ReadOnlyStatus',
        'readonlyInstanceSQLDelayedTime' => 'ReadonlyInstanceSQLDelayedTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityIPList' => 'SecurityIPList',
        'securityIPMode' => 'SecurityIPMode',
        'serverlessConfig' => 'ServerlessConfig',
        'slaveZones' => 'SlaveZones',
        'superPermissionMode' => 'SuperPermissionMode',
        'supportCompression' => 'SupportCompression',
        'tempDBInstanceId' => 'TempDBInstanceId',
        'tempUpgradeTimeEnd' => 'TempUpgradeTimeEnd',
        'tempUpgradeTimeStart' => 'TempUpgradeTimeStart',
        'timeZone' => 'TimeZone',
        'tips' => 'Tips',
        'tipsLevel' => 'TipsLevel',
        'vSwitchId' => 'VSwitchId',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
        'kindCode' => 'kindCode',
    ];

    public function validate()
    {
        if (null !== $this->babelfishConfig) {
            $this->babelfishConfig->validate();
        }
        if (null !== $this->DBClusterNodes) {
            $this->DBClusterNodes->validate();
        }
        if (null !== $this->extra) {
            $this->extra->validate();
        }
        if (null !== $this->readOnlyDBInstanceIds) {
            $this->readOnlyDBInstanceIds->validate();
        }
        if (null !== $this->serverlessConfig) {
            $this->serverlessConfig->validate();
        }
        if (null !== $this->slaveZones) {
            $this->slaveZones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountMaxQuantity) {
            $res['AccountMaxQuantity'] = $this->accountMaxQuantity;
        }

        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }

        if (null !== $this->autoUpgradeMinorVersion) {
            $res['AutoUpgradeMinorVersion'] = $this->autoUpgradeMinorVersion;
        }

        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }

        if (null !== $this->babelfishConfig) {
            $res['BabelfishConfig'] = null !== $this->babelfishConfig ? $this->babelfishConfig->toArray($noStream) : $this->babelfishConfig;
        }

        if (null !== $this->bpeEnabled) {
            $res['BpeEnabled'] = $this->bpeEnabled;
        }

        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }

        if (null !== $this->canTempUpgrade) {
            $res['CanTempUpgrade'] = $this->canTempUpgrade;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->coldDataEnabled) {
            $res['ColdDataEnabled'] = $this->coldDataEnabled;
        }

        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }

        if (null !== $this->compressionMode) {
            $res['CompressionMode'] = $this->compressionMode;
        }

        if (null !== $this->compressionRatio) {
            $res['CompressionRatio'] = $this->compressionRatio;
        }

        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->consoleVersion) {
            $res['ConsoleVersion'] = $this->consoleVersion;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->currentKernelVersion) {
            $res['CurrentKernelVersion'] = $this->currentKernelVersion;
        }

        if (null !== $this->DBClusterNodes) {
            $res['DBClusterNodes'] = null !== $this->DBClusterNodes ? $this->DBClusterNodes->toArray($noStream) : $this->DBClusterNodes;
        }

        if (null !== $this->DBInstanceCPU) {
            $res['DBInstanceCPU'] = $this->DBInstanceCPU;
        }

        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceClassType) {
            $res['DBInstanceClassType'] = $this->DBInstanceClassType;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceDiskUsed) {
            $res['DBInstanceDiskUsed'] = $this->DBInstanceDiskUsed;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBInstanceMemory) {
            $res['DBInstanceMemory'] = $this->DBInstanceMemory;
        }

        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }

        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }

        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }

        if (null !== $this->DBMaxQuantity) {
            $res['DBMaxQuantity'] = $this->DBMaxQuantity;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->disasterRecoveryInfo) {
            $res['DisasterRecoveryInfo'] = $this->disasterRecoveryInfo;
        }

        if (null !== $this->disasterRecoveryInstances) {
            $res['DisasterRecoveryInstances'] = $this->disasterRecoveryInstances;
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

        if (null !== $this->extra) {
            $res['Extra'] = null !== $this->extra ? $this->extra->toArray($noStream) : $this->extra;
        }

        if (null !== $this->generalGroupName) {
            $res['GeneralGroupName'] = $this->generalGroupName;
        }

        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->incrementSourceDBInstanceId) {
            $res['IncrementSourceDBInstanceId'] = $this->incrementSourceDBInstanceId;
        }

        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }

        if (null !== $this->instructionSetArch) {
            $res['InstructionSetArch'] = $this->instructionSetArch;
        }

        if (null !== $this->ioAccelerationEnabled) {
            $res['IoAccelerationEnabled'] = $this->ioAccelerationEnabled;
        }

        if (null !== $this->latestKernelVersion) {
            $res['LatestKernelVersion'] = $this->latestKernelVersion;
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

        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }

        if (null !== $this->masterZone) {
            $res['MasterZone'] = $this->masterZone;
        }

        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }

        if (null !== $this->maxIOMBPS) {
            $res['MaxIOMBPS'] = $this->maxIOMBPS;
        }

        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }

        if (null !== $this->multipleTempUpgrade) {
            $res['MultipleTempUpgrade'] = $this->multipleTempUpgrade;
        }

        if (null !== $this->optimizedWritesInfo) {
            $res['OptimizedWritesInfo'] = $this->optimizedWritesInfo;
        }

        if (null !== $this->PGBouncerEnabled) {
            $res['PGBouncerEnabled'] = $this->PGBouncerEnabled;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }

        if (null !== $this->readOnlyDBInstanceIds) {
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toArray($noStream) : $this->readOnlyDBInstanceIds;
        }

        if (null !== $this->readOnlyStatus) {
            $res['ReadOnlyStatus'] = $this->readOnlyStatus;
        }

        if (null !== $this->readonlyInstanceSQLDelayedTime) {
            $res['ReadonlyInstanceSQLDelayedTime'] = $this->readonlyInstanceSQLDelayedTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }

        if (null !== $this->serverlessConfig) {
            $res['ServerlessConfig'] = null !== $this->serverlessConfig ? $this->serverlessConfig->toArray($noStream) : $this->serverlessConfig;
        }

        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toArray($noStream) : $this->slaveZones;
        }

        if (null !== $this->superPermissionMode) {
            $res['SuperPermissionMode'] = $this->superPermissionMode;
        }

        if (null !== $this->supportCompression) {
            $res['SupportCompression'] = $this->supportCompression;
        }

        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }

        if (null !== $this->tempUpgradeTimeEnd) {
            $res['TempUpgradeTimeEnd'] = $this->tempUpgradeTimeEnd;
        }

        if (null !== $this->tempUpgradeTimeStart) {
            $res['TempUpgradeTimeStart'] = $this->tempUpgradeTimeStart;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        if (null !== $this->tipsLevel) {
            $res['TipsLevel'] = $this->tipsLevel;
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

        if (null !== $this->kindCode) {
            $res['kindCode'] = $this->kindCode;
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
        if (isset($map['AccountMaxQuantity'])) {
            $model->accountMaxQuantity = $map['AccountMaxQuantity'];
        }

        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }

        if (isset($map['AutoUpgradeMinorVersion'])) {
            $model->autoUpgradeMinorVersion = $map['AutoUpgradeMinorVersion'];
        }

        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }

        if (isset($map['BabelfishConfig'])) {
            $model->babelfishConfig = babelfishConfig::fromMap($map['BabelfishConfig']);
        }

        if (isset($map['BpeEnabled'])) {
            $model->bpeEnabled = $map['BpeEnabled'];
        }

        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }

        if (isset($map['CanTempUpgrade'])) {
            $model->canTempUpgrade = $map['CanTempUpgrade'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ColdDataEnabled'])) {
            $model->coldDataEnabled = $map['ColdDataEnabled'];
        }

        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }

        if (isset($map['CompressionMode'])) {
            $model->compressionMode = $map['CompressionMode'];
        }

        if (isset($map['CompressionRatio'])) {
            $model->compressionRatio = $map['CompressionRatio'];
        }

        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['ConsoleVersion'])) {
            $model->consoleVersion = $map['ConsoleVersion'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['CurrentKernelVersion'])) {
            $model->currentKernelVersion = $map['CurrentKernelVersion'];
        }

        if (isset($map['DBClusterNodes'])) {
            $model->DBClusterNodes = DBClusterNodes::fromMap($map['DBClusterNodes']);
        }

        if (isset($map['DBInstanceCPU'])) {
            $model->DBInstanceCPU = $map['DBInstanceCPU'];
        }

        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceClassType'])) {
            $model->DBInstanceClassType = $map['DBInstanceClassType'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceDiskUsed'])) {
            $model->DBInstanceDiskUsed = $map['DBInstanceDiskUsed'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBInstanceMemory'])) {
            $model->DBInstanceMemory = $map['DBInstanceMemory'];
        }

        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }

        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }

        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }

        if (isset($map['DBMaxQuantity'])) {
            $model->DBMaxQuantity = $map['DBMaxQuantity'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DisasterRecoveryInfo'])) {
            $model->disasterRecoveryInfo = $map['DisasterRecoveryInfo'];
        }

        if (isset($map['DisasterRecoveryInstances'])) {
            $model->disasterRecoveryInstances = $map['DisasterRecoveryInstances'];
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

        if (isset($map['Extra'])) {
            $model->extra = extra::fromMap($map['Extra']);
        }

        if (isset($map['GeneralGroupName'])) {
            $model->generalGroupName = $map['GeneralGroupName'];
        }

        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['IncrementSourceDBInstanceId'])) {
            $model->incrementSourceDBInstanceId = $map['IncrementSourceDBInstanceId'];
        }

        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }

        if (isset($map['InstructionSetArch'])) {
            $model->instructionSetArch = $map['InstructionSetArch'];
        }

        if (isset($map['IoAccelerationEnabled'])) {
            $model->ioAccelerationEnabled = $map['IoAccelerationEnabled'];
        }

        if (isset($map['LatestKernelVersion'])) {
            $model->latestKernelVersion = $map['LatestKernelVersion'];
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

        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }

        if (isset($map['MasterZone'])) {
            $model->masterZone = $map['MasterZone'];
        }

        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }

        if (isset($map['MaxIOMBPS'])) {
            $model->maxIOMBPS = $map['MaxIOMBPS'];
        }

        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }

        if (isset($map['MultipleTempUpgrade'])) {
            $model->multipleTempUpgrade = $map['MultipleTempUpgrade'];
        }

        if (isset($map['OptimizedWritesInfo'])) {
            $model->optimizedWritesInfo = $map['OptimizedWritesInfo'];
        }

        if (isset($map['PGBouncerEnabled'])) {
            $model->PGBouncerEnabled = $map['PGBouncerEnabled'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }

        if (isset($map['ReadOnlyDBInstanceIds'])) {
            $model->readOnlyDBInstanceIds = readOnlyDBInstanceIds::fromMap($map['ReadOnlyDBInstanceIds']);
        }

        if (isset($map['ReadOnlyStatus'])) {
            $model->readOnlyStatus = $map['ReadOnlyStatus'];
        }

        if (isset($map['ReadonlyInstanceSQLDelayedTime'])) {
            $model->readonlyInstanceSQLDelayedTime = $map['ReadonlyInstanceSQLDelayedTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }

        if (isset($map['ServerlessConfig'])) {
            $model->serverlessConfig = serverlessConfig::fromMap($map['ServerlessConfig']);
        }

        if (isset($map['SlaveZones'])) {
            $model->slaveZones = slaveZones::fromMap($map['SlaveZones']);
        }

        if (isset($map['SuperPermissionMode'])) {
            $model->superPermissionMode = $map['SuperPermissionMode'];
        }

        if (isset($map['SupportCompression'])) {
            $model->supportCompression = $map['SupportCompression'];
        }

        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }

        if (isset($map['TempUpgradeTimeEnd'])) {
            $model->tempUpgradeTimeEnd = $map['TempUpgradeTimeEnd'];
        }

        if (isset($map['TempUpgradeTimeStart'])) {
            $model->tempUpgradeTimeStart = $map['TempUpgradeTimeStart'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        if (isset($map['TipsLevel'])) {
            $model->tipsLevel = $map['TipsLevel'];
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

        if (isset($map['kindCode'])) {
            $model->kindCode = $map['kindCode'];
        }

        return $model;
    }
}
