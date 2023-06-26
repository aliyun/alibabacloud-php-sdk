<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponseBody\items\DBInstanceAttribute\slaveZones;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @description The maximum number of accounts.
     *
     * @example 500
     *
     * @var int
     */
    public $accountMaxQuantity;

    /**
     * @description The type of the account.
     *
     * @example super
     *
     * @var string
     */
    public $accountType;

    /**
     * @description The service availability of the instance in percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @description The category of the instance.
     *
     * @example 0
     *
     * @var string
     */
    public $category;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Performance**: standard mode
     *   **Safety**: enhanced mode
     *
     * @example Performance
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The internal endpoint of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The time when the audio or video file was created.
     *
     * @example 2011-05-30T12:11:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The number of cores that are configured for the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @description The instance type of the instance.
     *
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance family.
     *
     * @example s
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description The description of the instance.
     *
     * @example 0
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The memory size of the instance. Unit: MB.
     *
     * @example 4096
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Internet**
     *   **Intranet**
     *
     * @example Internet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The status of the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 10
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The type of the instance. Valid values:
     *
     *   **Primary**: primary instance
     *   **Readonly**: read-only instance
     *   **Guard**: disaster recovery instance
     *   **Temp**: temporary instance
     *
     * @example Primary
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The maximum number of databases that can be created on the instance.
     *
     * @example 200
     *
     * @var int
     */
    public $DBMaxQuantity;

    /**
     * @description The type of the database engine.
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The engine version of the instance.
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time.
     *
     * @example 2019-03-27T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $exportKey;

    /**
     * @description The ID of the disaster recovery instance that is attached to the instance.
     *
     * @example rm-uf64zsuxxxxxxxxxx
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description The ID of the instance from which incremental data comes. The incremental data of a disaster recovery instance or read-only instance comes from its primary instance. If this parameter is not returned, the instance is a primary instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $incrementSourceDBInstanceId;

    /**
     * @description The type of the network.
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The lock mode of the instance.
     *
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The reason why the instance was locked.
     *
     * @example instance_expired
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The maintenance window of the instance. The time is displayed in UTC. Take note that the maintenance window that is displayed in the ApsaraDB RDS console is equal to the value of this parameter plus 8 hours.
     *
     * @example 00:00Z-02:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The ID of the primary instance.
     *
     * @example rm-uf6wjk5xxxxxxxxxx
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description The maximum number of concurrent connections that are allowed by the instance.
     *
     * @example 60
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum number of I/O requests that is processed by the instance per second.
     *
     * @example 150
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description The billing method of the instance.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port that is used to connect to the instance over an internal network.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The latency of data replication from the primary instance to the read-only instance. This parameter is valid for read-only instances.
     *
     * @example 0
     *
     * @var string
     */
    public $readDelayTime;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IP address whitelist of the instance.
     *
     * @example 42.xx.xx.xx
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @var slaveZones
     */
    public $slaveZones;

    /**
     * @description None.
     *
     * @example No
     *
     * @var string
     */
    public $supportUpgradeAccountType;

    /**
     * @description The tag.
     *
     * @example 0
     *
     * @var string
     */
    public $tags;

    /**
     * @description The ID of the temporary instance that is attached to the instance.
     *
     * @example rm-uf64zsuxxxxxxxxxx
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-uf6adz52c2pxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf6f7l4fg90xxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone in which the instance resides.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountMaxQuantity'          => 'AccountMaxQuantity',
        'accountType'                 => 'AccountType',
        'availabilityValue'           => 'AvailabilityValue',
        'category'                    => 'Category',
        'connectionMode'              => 'ConnectionMode',
        'connectionString'            => 'ConnectionString',
        'creationTime'                => 'CreationTime',
        'DBInstanceCPU'               => 'DBInstanceCPU',
        'DBInstanceClass'             => 'DBInstanceClass',
        'DBInstanceClassType'         => 'DBInstanceClassType',
        'DBInstanceDescription'       => 'DBInstanceDescription',
        'DBInstanceId'                => 'DBInstanceId',
        'DBInstanceMemory'            => 'DBInstanceMemory',
        'DBInstanceNetType'           => 'DBInstanceNetType',
        'DBInstanceStatus'            => 'DBInstanceStatus',
        'DBInstanceStorage'           => 'DBInstanceStorage',
        'DBInstanceType'              => 'DBInstanceType',
        'DBMaxQuantity'               => 'DBMaxQuantity',
        'engine'                      => 'Engine',
        'engineVersion'               => 'EngineVersion',
        'expireTime'                  => 'ExpireTime',
        'exportKey'                   => 'ExportKey',
        'guardDBInstanceId'           => 'GuardDBInstanceId',
        'incrementSourceDBInstanceId' => 'IncrementSourceDBInstanceId',
        'instanceNetworkType'         => 'InstanceNetworkType',
        'lockMode'                    => 'LockMode',
        'lockReason'                  => 'LockReason',
        'maintainTime'                => 'MaintainTime',
        'masterInstanceId'            => 'MasterInstanceId',
        'maxConnections'              => 'MaxConnections',
        'maxIOPS'                     => 'MaxIOPS',
        'payType'                     => 'PayType',
        'port'                        => 'Port',
        'readDelayTime'               => 'ReadDelayTime',
        'regionId'                    => 'RegionId',
        'securityIPList'              => 'SecurityIPList',
        'slaveZones'                  => 'SlaveZones',
        'supportUpgradeAccountType'   => 'SupportUpgradeAccountType',
        'tags'                        => 'Tags',
        'tempDBInstanceId'            => 'TempDBInstanceId',
        'vSwitchId'                   => 'VSwitchId',
        'vpcId'                       => 'VpcId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountMaxQuantity) {
            $res['AccountMaxQuantity'] = $this->accountMaxQuantity;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->availabilityValue) {
            $res['AvailabilityValue'] = $this->availabilityValue;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->connectionMode) {
            $res['ConnectionMode'] = $this->connectionMode;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->DBMaxQuantity) {
            $res['DBMaxQuantity'] = $this->DBMaxQuantity;
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
        if (null !== $this->exportKey) {
            $res['ExportKey'] = $this->exportKey;
        }
        if (null !== $this->guardDBInstanceId) {
            $res['GuardDBInstanceId'] = $this->guardDBInstanceId;
        }
        if (null !== $this->incrementSourceDBInstanceId) {
            $res['IncrementSourceDBInstanceId'] = $this->incrementSourceDBInstanceId;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
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
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxIOPS) {
            $res['MaxIOPS'] = $this->maxIOPS;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->readDelayTime) {
            $res['ReadDelayTime'] = $this->readDelayTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toMap() : null;
        }
        if (null !== $this->supportUpgradeAccountType) {
            $res['SupportUpgradeAccountType'] = $this->supportUpgradeAccountType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountMaxQuantity'])) {
            $model->accountMaxQuantity = $map['AccountMaxQuantity'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AvailabilityValue'])) {
            $model->availabilityValue = $map['AvailabilityValue'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConnectionMode'])) {
            $model->connectionMode = $map['ConnectionMode'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
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
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DBMaxQuantity'])) {
            $model->DBMaxQuantity = $map['DBMaxQuantity'];
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
        if (isset($map['ExportKey'])) {
            $model->exportKey = $map['ExportKey'];
        }
        if (isset($map['GuardDBInstanceId'])) {
            $model->guardDBInstanceId = $map['GuardDBInstanceId'];
        }
        if (isset($map['IncrementSourceDBInstanceId'])) {
            $model->incrementSourceDBInstanceId = $map['IncrementSourceDBInstanceId'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
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
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxIOPS'])) {
            $model->maxIOPS = $map['MaxIOPS'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ReadDelayTime'])) {
            $model->readDelayTime = $map['ReadDelayTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SlaveZones'])) {
            $model->slaveZones = slaveZones::fromMap($map['SlaveZones']);
        }
        if (isset($map['SupportUpgradeAccountType'])) {
            $model->supportUpgradeAccountType = $map['SupportUpgradeAccountType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
