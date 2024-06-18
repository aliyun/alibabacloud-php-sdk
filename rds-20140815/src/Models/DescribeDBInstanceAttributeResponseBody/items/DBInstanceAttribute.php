<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\babelfishConfig;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\DBClusterNodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\readOnlyDBInstanceIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\serverlessConfig;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\slaveZones;
use AlibabaCloud\Tea\Model;

class DBInstanceAttribute extends Model
{
    /**
     * @description The maximum number of accounts that can be created on the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $accountMaxQuantity;

    /**
     * @description The advanced features that are enabled for the instance. If multiple advanced features are enabled, the advanced features are separated by commas (,). This parameter is available only to instances that run **SQL Server**. Valid values:
     *
     *   **LinkedServer**
     *   **DistributeTransaction**
     *
     * @example LinkedServer
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @description The method that is used to update the minor engine version of the instance. Valid values:
     *
     *   **Auto**: automatic update.
     *   **Manual**: manual update. The minor engine version of the instance is forcefully updated only when the in-use minor engine version is phased out.
     *
     * @example Auto
     *
     * @var string
     */
    public $autoUpgradeMinorVersion;

    /**
     * @description The availability status of the instance in percentage.
     *
     * @example 100.0%
     *
     * @var string
     */
    public $availabilityValue;

    /**
     * @description The configuration of the Babelfish feature for the ApsaraDB RDS for PostgreSQL instance.
     *
     * >  This parameter applies only to ApsaraDB RDS for PostgreSQL instances for which Babelfish is enabled. For more information, see [Introduction to Babelfish](https://help.aliyun.com/document_detail/428613.html).
     * @var babelfishConfig
     */
    public $babelfishConfig;

    /**
     * @description A deprecated parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var string
     */
    public $bpeEnabled;

    /**
     * @description An invalid parameter. You do not need to specify this parameter.
     *
     * @example false
     *
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $canTempUpgrade;

    /**
     * @description The RDS edition. Valid values:
     *
     *   **Basic**: RDS Basic Edition
     *   **HighAvailability**: RDS High-availability Edition
     *   **cluster**: RDS Cluster Edition for ApsaraDB RDS for MySQL
     *   **AlwaysOn**: RDS Cluster Edition for ApsaraDB RDS for SQL Server
     *   **Finance**: RDS Enterprise Edition
     *   **Serverless_basic**: RDS Basic Edition for serverless instances
     *
     * @example Basic
     *
     * @var string
     */
    public $category;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example None
     *
     * @var bool
     */
    public $coldDataEnabled;

    /**
     * @description The character set collation of the instance.
     *
     * @example Chinese_PRC_CI_AS
     *
     * @var string
     */
    public $collation;

    /**
     * @description The connection mode of the instance. Valid values:
     *
     *   **Standard**: standard mode
     *   **Safe**: database proxy mode
     *
     * @example Standard
     *
     * @var string
     */
    public $connectionMode;

    /**
     * @description The internal endpoint.
     *
     * @example rm-uf6wjk5*****.mysql.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The type of the proxy that is used by the instance. Valid values:
     *
     *   **1**: shared database proxy
     *   **2**: dedicated database proxy
     *
     * >  We recommend that you use the **ProxyType** parameter instead of this parameter.
     * @example 2
     *
     * @var string
     */
    public $consoleVersion;

    /**
     * @description The creation time. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2011-05-30T12:11:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The minor engine version.
     *
     * @example rds_20181010
     *
     * @var string
     */
    public $currentKernelVersion;

    /**
     * @description The information about the node in the cluster.
     *
     * @var DBClusterNodes
     */
    public $DBClusterNodes;

    /**
     * @description The number of CPU cores.
     *
     * @example 2
     *
     * @var string
     */
    public $DBInstanceCPU;

    /**
     * @description The instance type of the instance. For more information, see [Primary ApsaraDB RDS instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * @example rds.mys2.small
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The instance family. Valid values:
     *
     *   **s**: shared instance family
     *   **x**: general-purpose instance family
     *   **d**: dedicated instance family
     *   **h**: dedicated host instance family
     *
     * @example s
     *
     * @var string
     */
    public $DBInstanceClassType;

    /**
     * @description The instance description.
     *
     * @example The number of cores that are configured for the instance.
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The disk usage of the instance. Unit: MB.
     *
     * @example 300
     *
     * @var string
     */
    public $DBInstanceDiskUsed;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The memory capacity of the instance. Unit: MB.
     *
     * @example 4096
     *
     * @var int
     */
    public $DBInstanceMemory;

    /**
     * @description The type of the network over which the instance is connected. Valid values:
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
     * @description The instance status. For more information, see [Instance statuses](https://help.aliyun.com/document_detail/26315.html).
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
     * @description The storage type of the instance. Valid values:
     *
     *   **local_ssd** or **ephemeral_ssd**: local SSD
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: Enterprise SSD (ESSD)
     *   **general_essd**: general ESSD
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The instance type. Valid values:
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
     * @description The ID of the dedicated cluster to which the instances belong.
     *
     * @example dhg-7a9*****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description Indicates whether the release protection feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **SQLServer**
     *   **MariaDB**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The database engine version.
     *
     * @example 5.5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The expiration time of the instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * >  Pay-as-you-go instances never expire.
     * @example 2019-03-27T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The extended information of the instance.
     *
     * @var extra
     */
    public $extra;

    /**
     * @description The name of the dedicated cluster to which the instance belongs. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition.
     *
     * @example TestGroup
     *
     * @var string
     */
    public $generalGroupName;

    /**
     * @description The ID of the disaster recovery instance that is attached to the primary instance.
     *
     * @example rm-uf64zsu*****
     *
     * @var string
     */
    public $guardDBInstanceId;

    /**
     * @description The IP address type. Only **IPv4 addresses** are supported.
     *
     * @example IPv4
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The ID of the instance from which incremental data comes. The incremental data of a disaster recovery instance comes from its primary instance. The incremental data of a read-only instance comes from its primary instance. If this parameter is not returned, the instance is a primary instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $incrementSourceDBInstanceId;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * @example Classic
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The architecture type of the instance. Valid values:
     *
     *   **x86**
     *   **arm**
     *
     * @example x86
     *
     * @var string
     */
    public $instructionSetArch;

    /**
     * @description A reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $ioAccelerationEnabled;

    /**
     * @description The latest minor engine version that is supported by the instance.
     *
     * @example rds_20201031
     *
     * @var string
     */
    public $latestKernelVersion;

    /**
     * @description The lock mode of the instance. Valid values:
     *
     *   **Unlock**: The instance is not locked.
     *   **ManualLock**: The instance is manually locked.
     *   **LockByExpiration**: The instance is automatically locked due to instance expiration.
     *   **LockByRestoration**: The instance is automatically locked due to instance restoration.
     *   **LockByDiskQuota**: The instance is automatically locked due to exhausted storage space.
     *   **LockReadInstanceByDiskQuota**: The instance is a read-only instance and is automatically locked due to exhausted storage.
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
     * @description The maintenance window of the instance. The time is displayed in UTC. The maintenance window displayed in the ApsaraDB RDS console is equal to the value of this parameter plus 8 hours.
     *
     * @example 00:00Z-02:00Z
     *
     * @var string
     */
    public $maintainTime;

    /**
     * @description The primary instance ID.
     *
     * >  If this parameter is not returned, the instance is the primary instance.
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description The zone ID of the primary instance.
     *
     * @example 5454284
     *
     * @var string
     */
    public $masterZone;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 60
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum I/O throughput. Unit: MB/s.
     *
     * @example 0MB/s
     *
     * @var int
     */
    public $maxIOMBPS;

    /**
     * @description The maximum number of I/O requests per second.
     *
     * @example 150
     *
     * @var int
     */
    public $maxIOPS;

    /**
     * @description Indicates whether PgBouncer is enabled.
     *
     * >  This parameter is returned only for RDS instances that run PostgreSQL. If PgBouncer is enabled, the return value is **true**.
     * @example true
     *
     * @var string
     */
    public $PGBouncerEnabled;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *   **SERVERLESS**: serverless
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
     * @description The type of the proxy that is supported by the instance. Valid values:
     *
     *   **0**: The instance does not support database proxies.
     *   **1**: The instance supports shared proxies, with which the instance runs in multi-tenant mode.
     *   **2**: The instance supports dedicated proxies, with which the instance runs in single-tenant mode.
     *
     * @example 1
     *
     * @var int
     */
    public $proxyType;

    /**
     * @description The IDs of the read-only instances that are attached to the primary instance.
     *
     * @var readOnlyDBInstanceIds
     */
    public $readOnlyDBInstanceIds;

    /**
     * @description The latency at which the system replicates data to read-only instances. The system replicates data from the primary instance to the read-only instances at the latency that is specified by the **ReadonlyInstanceSQLDelayedTime** parameter. Unit: seconds.
     *
     * @example 30
     *
     * @var string
     */
    public $readonlyInstanceSQLDelayedTime;

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
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IP addresses in the IP address whitelist.
     *
     * @example 192.168.XX.XX/24
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The whitelist mode. Valid values:
     *
     *   **normal**: standard whitelist mode
     *   **safety**: enhanced whitelist mode
     *
     * @example normal
     *
     * @var string
     */
    public $securityIPMode;

    /**
     * @description The settings of the serverless instance.
     *
     * @var serverlessConfig
     */
    public $serverlessConfig;

    /**
     * @description The zone IDs of the secondary instances.
     *
     * @var slaveZones
     */
    public $slaveZones;

    /**
     * @description Indicates whether the instance supports superuser accounts, such as the system administrator (SA) account, Active Directory (AD) account, and host account. Valid values:
     *
     *   **Enable**
     *   **Disabled**
     *
     * @example Disabled
     *
     * @var string
     */
    public $superPermissionMode;

    /**
     * @description The ID of the temporary instance that is attached to the primary instance.
     *
     * @example rm-uf64zsu*****
     *
     * @var string
     */
    public $tempDBInstanceId;

    /**
     * @example 2024-05-30 00:00:00
     *
     * @var string
     */
    public $tempUpgradeTimeEnd;

    /**
     * @example 2024-05-29 00:00:00
     *
     * @var string
     */
    public $tempUpgradeTimeStart;

    /**
     * @description The time zone.
     *
     * @example Central Standard Time
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description The information about the exception that is detected on the instance. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition.
     *
     * @example The IP addresses in the IP address whitelist.
     *
     * @var string
     */
    public $tips;

    /**
     * @description The severity of the exception that is detected on the instance. This parameter is returned only when the instance is created in an ApsaraDB MyBase cluster that runs MySQL on Standard Edition. Valid values:
     *
     *   **1**: The instance is normal.
     *   **2**: The specifications of the read-only instances do not match the specifications of the primary instance. You must adjust the specifications of these instances based on your business requirements.
     *
     * @example 1
     *
     * @var int
     */
    public $tipsLevel;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-*****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the instance. This parameter is returned only when the instance resides in a VPC.
     *
     * @example vpc-23rsxdf*****
     *
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description An internal parameter. You do not need to specify this parameter.
     *
     * @example The architecture type of the instance. Valid values:
     *
     * - **x86**
     * - **arm**
     * @var string
     */
    public $kindCode;
    protected $_name = [
        'accountMaxQuantity'             => 'AccountMaxQuantity',
        'advancedFeatures'               => 'AdvancedFeatures',
        'autoUpgradeMinorVersion'        => 'AutoUpgradeMinorVersion',
        'availabilityValue'              => 'AvailabilityValue',
        'babelfishConfig'                => 'BabelfishConfig',
        'bpeEnabled'                     => 'BpeEnabled',
        'burstingEnabled'                => 'BurstingEnabled',
        'canTempUpgrade'                 => 'CanTempUpgrade',
        'category'                       => 'Category',
        'coldDataEnabled'                => 'ColdDataEnabled',
        'collation'                      => 'Collation',
        'connectionMode'                 => 'ConnectionMode',
        'connectionString'               => 'ConnectionString',
        'consoleVersion'                 => 'ConsoleVersion',
        'creationTime'                   => 'CreationTime',
        'currentKernelVersion'           => 'CurrentKernelVersion',
        'DBClusterNodes'                 => 'DBClusterNodes',
        'DBInstanceCPU'                  => 'DBInstanceCPU',
        'DBInstanceClass'                => 'DBInstanceClass',
        'DBInstanceClassType'            => 'DBInstanceClassType',
        'DBInstanceDescription'          => 'DBInstanceDescription',
        'DBInstanceDiskUsed'             => 'DBInstanceDiskUsed',
        'DBInstanceId'                   => 'DBInstanceId',
        'DBInstanceMemory'               => 'DBInstanceMemory',
        'DBInstanceNetType'              => 'DBInstanceNetType',
        'DBInstanceStatus'               => 'DBInstanceStatus',
        'DBInstanceStorage'              => 'DBInstanceStorage',
        'DBInstanceStorageType'          => 'DBInstanceStorageType',
        'DBInstanceType'                 => 'DBInstanceType',
        'DBMaxQuantity'                  => 'DBMaxQuantity',
        'dedicatedHostGroupId'           => 'DedicatedHostGroupId',
        'deletionProtection'             => 'DeletionProtection',
        'engine'                         => 'Engine',
        'engineVersion'                  => 'EngineVersion',
        'expireTime'                     => 'ExpireTime',
        'extra'                          => 'Extra',
        'generalGroupName'               => 'GeneralGroupName',
        'guardDBInstanceId'              => 'GuardDBInstanceId',
        'IPType'                         => 'IPType',
        'incrementSourceDBInstanceId'    => 'IncrementSourceDBInstanceId',
        'instanceNetworkType'            => 'InstanceNetworkType',
        'instructionSetArch'             => 'InstructionSetArch',
        'ioAccelerationEnabled'          => 'IoAccelerationEnabled',
        'latestKernelVersion'            => 'LatestKernelVersion',
        'lockMode'                       => 'LockMode',
        'lockReason'                     => 'LockReason',
        'maintainTime'                   => 'MaintainTime',
        'masterInstanceId'               => 'MasterInstanceId',
        'masterZone'                     => 'MasterZone',
        'maxConnections'                 => 'MaxConnections',
        'maxIOMBPS'                      => 'MaxIOMBPS',
        'maxIOPS'                        => 'MaxIOPS',
        'PGBouncerEnabled'               => 'PGBouncerEnabled',
        'payType'                        => 'PayType',
        'port'                           => 'Port',
        'proxyType'                      => 'ProxyType',
        'readOnlyDBInstanceIds'          => 'ReadOnlyDBInstanceIds',
        'readonlyInstanceSQLDelayedTime' => 'ReadonlyInstanceSQLDelayedTime',
        'regionId'                       => 'RegionId',
        'resourceGroupId'                => 'ResourceGroupId',
        'securityIPList'                 => 'SecurityIPList',
        'securityIPMode'                 => 'SecurityIPMode',
        'serverlessConfig'               => 'ServerlessConfig',
        'slaveZones'                     => 'SlaveZones',
        'superPermissionMode'            => 'SuperPermissionMode',
        'tempDBInstanceId'               => 'TempDBInstanceId',
        'tempUpgradeTimeEnd'             => 'TempUpgradeTimeEnd',
        'tempUpgradeTimeStart'           => 'TempUpgradeTimeStart',
        'timeZone'                       => 'TimeZone',
        'tips'                           => 'Tips',
        'tipsLevel'                      => 'TipsLevel',
        'vSwitchId'                      => 'VSwitchId',
        'vpcCloudInstanceId'             => 'VpcCloudInstanceId',
        'vpcId'                          => 'VpcId',
        'zoneId'                         => 'ZoneId',
        'kindCode'                       => 'kindCode',
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
            $res['BabelfishConfig'] = null !== $this->babelfishConfig ? $this->babelfishConfig->toMap() : null;
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
            $res['DBClusterNodes'] = null !== $this->DBClusterNodes ? $this->DBClusterNodes->toMap() : null;
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
            $res['Extra'] = null !== $this->extra ? $this->extra->toMap() : null;
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
            $res['ReadOnlyDBInstanceIds'] = null !== $this->readOnlyDBInstanceIds ? $this->readOnlyDBInstanceIds->toMap() : null;
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
            $res['ServerlessConfig'] = null !== $this->serverlessConfig ? $this->serverlessConfig->toMap() : null;
        }
        if (null !== $this->slaveZones) {
            $res['SlaveZones'] = null !== $this->slaveZones ? $this->slaveZones->toMap() : null;
        }
        if (null !== $this->superPermissionMode) {
            $res['SuperPermissionMode'] = $this->superPermissionMode;
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
