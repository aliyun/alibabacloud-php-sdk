<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ConfigureDtsJobAdvanceRequest extends Model
{
    /**
     * @description The type of the task. Valid values:
     *
     *   **MIGRATION**: data migration task
     *   **SYNC**: data synchronization task
     *
     * @example 1610540493
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The HTTP status code.
     *
     * @example {"fullCheckModel":1,"fullCheckRatio":20,"checkMaximumHourEnable":1,"checkMaximumHour":1,"fullCheckErrorNotice":true,"fullCheckValidFailNotice":true,"fullCheckNoticeValue":8,"incrementalCheckErrorNotice":true,"incrementalCheckValidFailNotice":true,"incrementalCheckValidFailNoticeTimes":2,"incrementalCheckValidFailNoticePeriod":1,"incrementalCheckValidFailNoticeValue":1,"incrementalCheckDelayNotice":true,"incrementalCheckDelayNoticeTimes":2,"incrementalCheckDelayNoticePeriod":1,"incrementalCheckDelayNoticeValue":60,"fullDataCheck":true,"incrementalDataCheck":true,"dataCheckNoticePhone":"13126800****","dataCheckDbList":"{"dts":{"name":"dts","all":true}}"}
     *
     * @var string
     */
    public $dataCheckConfigure;

    /**
     * @description The objects that you want to migrate or synchronize. The value is a JSON string. For more information, see [Objects of DTS tasks](~~209545~~).
     *
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to add more configurations of the source or destination instance to the DTS task. For example, you can specify the data storage format of the destination Kafka database and the ID of the CEN instance. For more information, see [Reserve](~~273111~~).
     *
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description The start offset of incremental data migration or synchronization. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example {"dtstest":{"name":"dtstest","all":true}}
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The data verification task for a data migration or synchronization instance. The value is a JSON string that indicates parameter limits or alert configurations. For more information, see [DataCheckConfigure](~~459023~~).
     *
     * @example dtscluster_atyl3b5214uk***
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description Specifies whether to monitor the task status. Valid values:
     *
     *   **true**: monitors the task status.
     *   **false**: does not monitor the task status.
     *
     * @example true
     *
     * @var bool
     */
    public $delayNotice;

    /**
     * @description Specifies whether to monitor the task latency. Valid values:
     *
     *   **true**: monitors the task latency.
     *   **false**: does not monitor the task latency.
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $delayPhone;

    /**
     * @description The mobile numbers that receive status-related alerts. Separate multiple mobile numbers with commas (,).
     *
     * >
     *   This parameter is available only for China site (aliyun.com) users. Only mobile numbers in the Chinese mainland are supported. Up to 10 mobile numbers can be specified.
     *   International site (alibabacloud.com) users cannot receive alerts by using mobile phones, but can [set alert rules for DTS tasks in the CloudMonitor console](~~175876~~).
     *
     * @example 10
     *
     * @var int
     */
    public $delayRuleTime;

    /**
     * @description The password of the destination database account.
     *
     * >  If the destination database is a MaxCompute project, you must specify the AccessKey secret of your Alibaba Cloud account. For information about how to obtain your AccessKey pair, see [Create an AccessKey pair](~~116401~~).
     * @example dtstestdata
     *
     * @var string
     */
    public $destinationEndpointDataBaseName;

    /**
     * @description The IP address of the destination instance.
     *
     * >  If the **DestinationEndpointInstanceType** parameter is set to **OTHER**, **EXPRESS**, **DG**, or **CEN**, this parameter is available and required.
     * @example MySQL
     *
     * @var string
     */
    public $destinationEndpointEngineName;

    /**
     * @description The name of the database to which the objects migrated to the destination instance belong.
     *
     * >
     *   If the destination instance is a PolarDB for Oracle cluster, an AnalyticDB for PostgreSQL instance, a PostgreSQL database, a MaxCompute project, or a MongoDB database, this parameter is available and required.
     *   If the destination instance is a MaxCompute project, you must specify the ID of the MaxCompute project.
     *
     * @example 172.16.**.***
     *
     * @var string
     */
    public $destinationEndpointIP;

    /**
     * @description The ID of the region in which the destination instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >  If the destination instance is an Alibaba Cloud database instance, this parameter is required.
     * @example vpc-bp1opxu1zkhn00gzv****
     *
     * @var string
     */
    public $destinationEndpointInstanceID;

    /**
     * @description The database engine of the destination instance. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **MARIADB**: ApsaraDB RDS for MariaDB instance
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **POLARDB_O**: PolarDB for Oracle cluster
     *   **POLARDBX10**: PolarDB-X 1.0 instance
     *   **POLARDBX20**: PolarDB-X 2.0 instance
     *   **ORACLE**: self-managed Oracle database
     *   **POSTGRESQL**: ApsaraDB RDS for PostgreSQL instance or self-managed PostgreSQL database
     *   **MSSQL**: ApsaraDB RDS for SQL Server instance or self-managed SQL Server database
     *   **ADS**: AnalyticDB for MySQL V2.0 cluster
     *   **ADB30**: AnalyticDB for MySQL V3.0 cluster
     *   **MONGODB**: ApsaraDB for MongoDB instance or self-managed MongoDB database
     *   **GREENPLUM**: AnalyticDB for PostgreSQL instance
     *   **KAFKA**: Message Queue for Apache Kafka instance or self-managed Kafka cluster
     *   **DATAHUB**: DataHub project
     *   **DB2**: self-managed Db2 for LUW database
     *   **AS400**: self-managed Db2 for i database
     *   **ODPS**: MaxCompute project
     *   **Tablestore**: Tablestore instance
     *   **ELK**: Elasticsearch cluster
     *   **REDIS**: ApsaraDB for Redis instance or self-managed Redis database
     *
     * >
     *   Default value: **MYSQL**.
     *   If the DestinationEndpointEngineName parameter is set to **KAFKA**, **MONGODB**, or **PolarDB**, you must also specify the database information in the Reserve parameter. For more information, see [Reserve](~~273111~~).
     *
     * @example EXPRESS
     *
     * @var string
     */
    public $destinationEndpointInstanceType;

    /**
     * @description The ID of the data migration or synchronization task.
     *
     * >  You must specify at least one of the DtsJobId and **DtsInstanceId** parameters. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     * @example testsid
     *
     * @var string
     */
    public $destinationEndpointOracleSID;

    /**
     * @var string
     */
    public $destinationEndpointOwnerID;

    /**
     * @description Specifies whether to perform full data migration or synchronization. Default value: true. Valid values:
     *
     *   **true**: performs full data migration or synchronization.
     *   **false**: does not perform full data migration or synchronization.
     *
     * @example Test123456
     *
     * @var string
     */
    public $destinationEndpointPassword;

    /**
     * @description The database account of the destination database.
     *
     * >
     *   In most cases, this parameter is required.
     *   The permissions that are required for the database account vary with the migration or synchronization scenario. For more information, see [Prepare the database accounts for data migration](~~175878~~) or [Prepare the database accounts for data synchronization](~~213152~~).
     *   If the destination database is a MaxCompute project, you must specify the AccessKey ID of your Alibaba Cloud account. For information about how to obtain your AccessKey pair, see [Create an AccessKey pair](~~116401~~).
     *
     * @example 3306
     *
     * @var string
     */
    public $destinationEndpointPort;

    /**
     * @description The database service port of the destination instance.
     *
     * >  If the destination instance is a self-managed database, this parameter is available and required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationEndpointRegion;

    /**
     * @var string
     */
    public $destinationEndpointRole;

    /**
     * @description Specifies whether to perform schema migration or synchronization. Default value: true. Valid values:
     *
     *   **true**: performs schema migration or synchronization.
     *   **false**: does not perform schema migration or synchronization.
     *
     * @example dtstest
     *
     * @var string
     */
    public $destinationEndpointUserName;

    /**
     * @description The ID of the request.
     *
     * @example true
     *
     * @var bool
     */
    public $disasterRecoveryJob;

    /**
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @description The threshold for triggering latency-related alerts. Unit: seconds. The value must be an integer. You can set the threshold based on your business needs. To prevent jitters caused by network and database overloads, we recommend that you set the threshold to more than 10 seconds.
     *
     * >  If the **DelayNotice** parameter is set to **true**, this parameter is required.
     * @example dtsk2gm967v16f****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The mobile numbers that receive latency-related alerts. Separate multiple mobile numbers with commas (,).
     *
     * >
     *   This parameter is available only for China site (aliyun.com) users. Only mobile numbers in the Chinese mainland are supported. Up to 10 mobile numbers can be specified.
     *   International site (alibabacloud.com) users cannot receive alerts by using mobile phones, but can [set alert rules for DTS tasks in the CloudMonitor console](~~175876~~).
     *
     * @example k2gm967v16f****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the source instance.
     *
     * If the source instance is an Alibaba Cloud database instance, you must specify the ID of the database instance. For example, if the source instance is an ApsaraDB RDS for MySQL instance, you must specify the ID of the ApsaraDB RDS for MySQL instance.
     *
     * If the source instance is a self-managed database, the value of this parameter varies with the value of the **SourceEndpointInstanceType** parameter.****
     *
     *   If the SourceEndpointInstanceType parameter is set to **ECS**, you must specify the ID of the ECS instance.
     *   If the SourceEndpointInstanceType parameter is set to **DG**, you must specify the ID of the database gateway.
     *   If the SourceEndpointInstanceType parameter is set to **EXPRESS** or **CEN**, you must specify the ID of the VPC that is connected to the source instance.
     *
     * >  If the SourceEndpointInstanceType parameter is set to **CEN**, you must also specify the ID of the CEN instance in the Reserve parameter. For more information, see [Reserve](~~273111~~).
     * @example rdsmysql_to_mysql
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example true
     *
     * @var bool
     */
    public $errorNotice;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**: Data is synchronized from the source database to the destination database.
     *   **Reverse**: Data is synchronized from the destination database to the source database.
     *
     * >
     *   Default value: **Forward**.
     *   The value **Reverse** takes effect only if the topology of the data synchronization task is two-way synchronization.
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $errorPhone;

    /**
     * @description Specifies whether the instance is a disaster recovery instance.
     *
     *   **true**: The instance is a disaster recovery instance.
     *   **false**: The instance is not a disaster recovery instance.
     *
     * @example http://db-list-os-file.oss-cn-shanghai.aliyuncs.com/8e42_121852**********_79dd3aeabe2f43cdb**************
     *
     * @var Stream
     */
    public $fileOssUrlObject;

    /**
     * @description The ID of the data migration or synchronization instance.
     *
     * >  You must specify at least one of the **DtsJobId** and DtsInstanceId parameters. You can call the [DescribeDtsJobs](~~209702~~) operation to query the instance ID.
     * @example SYNC
     *
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The URL of the Object Storage Service (OSS) bucket that stores the files related to the DTS task.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The SID of the Oracle database.
     *
     * >  If the **DestinationEndpointEngineName** parameter is set to **ORACLE** and the **Oracle** database is deployed in a non-RAC architecture, this parameter is available and required.
     * @example {      "srcInstanceId": "cen-9kqshqum*******"  }
     *
     * @var string
     */
    public $reserve;

    /**
     * @description The password of the source database account.
     *
     * @example dtstestdatabase
     *
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @description The IP address of the source instance.
     *
     * >  If the **SourceEndpointInstanceType** parameter is set to **OTHER**, **EXPRESS**, **DG**, or **CEN**, this parameter is available and required.
     * @example MYSQL
     *
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  If the **SourceEndpointEngineName** parameter is set to **ORACLE** and the **Oracle** database is deployed in an architecture that is not a Real Application Cluster (RAC), this parameter is available and required.
     * @example 172.16.**.***
     *
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @description The ID of the region in which the source instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >  If the source instance is an Alibaba Cloud database instance, this parameter is required.
     * @example rm-bp1imrtn6fq7h****
     *
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @description The database engine of the source instance. Valid values:
     *
     *   **MYSQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **MARIADB**: ApsaraDB RDS for MariaDB instance
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **POLARDB_O**: PolarDB for Oracle cluster
     *   **POLARDBX10**: PolarDB-X 1.0 instance
     *   **POLARDBX20**: PolarDB-X 2.0 instance
     *   **ORACLE**: self-managed Oracle database
     *   **POSTGRESQL**: ApsaraDB RDS for PostgreSQL instance or self-managed PostgreSQL database
     *   **MSSQL**: ApsaraDB RDS for SQL Server instance or self-managed SQL Server database
     *   **MONGODB**: ApsaraDB for MongoDB instance or self-managed MongoDB database
     *   **DB2**: self-managed Db2 for LUW database
     *   **AS400**: self-managed Db2 for i database
     *   **DMSPOLARDB**: DMS logical database
     *   **HBASE**: self-managed HBase database
     *   **TERADATA**: Teradata database
     *   **TiDB**: TiDB database
     *   **REDIS**: ApsaraDB for Redis instance or self-managed Redis database
     *
     * >
     *   Default value: **MYSQL**.
     *   If the SourceEndpointEngineName parameter is set to **MONGODB**, you must also specify the architecture type of the MongoDB database in the Reserve parameter. For more information, see [Reserve](~~273111~~).
     *
     * @example RDS
     *
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @description The database account of the source database.
     *
     * >
     *   In most cases, this parameter is required.
     *   The permissions that are required for the database account vary with the migration or synchronization scenario. For more information, see [Prepare the database accounts for data migration](~~175878~~) or [Prepare the database accounts for data synchronization](~~213152~~).
     *
     * @example testsid
     *
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @description The type of the destination instance. Valid values:
     *
     **Alibaba Cloud database instances**
     *
     *   **RDS**: ApsaraDB RDS for MySQL instance, ApsaraDB RDS for SQL Server instance, ApsaraDB RDS for PostgreSQL instance, or ApsaraDB RDS for MariaDB instance
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **POLARDBX10**: PolarDB-X 1.0 instance
     *   **POLARDBX20**: PolarDB-X 2.0 instance
     *   **REDIS**: ApsaraDB for Redis instance
     *   **ADS**: AnalyticDB for MySQL V2.0 cluster or AnalyticDB for MySQL V3.0 cluster
     *   **MONGODB**: ApsaraDB for MongoDB instance
     *   **GREENPLUM**: AnalyticDB for PostgreSQL instance
     *   **DATAHUB**: DataHub project
     *   **ELK**: Elasticsearch cluster
     *   **Tablestore**: Tablestore instance
     *   **ODPS**: MaxCompute project
     *
     **Self-managed databases**
     *
     *   **OTHER**: self-managed database with a public IP address
     *   **ECS**: self-managed database hosted on an ECS instance
     *   **EXPRESS**: self-managed database connected over Express Connect
     *   **CEN**: self-managed database connected over CEN
     *   **DG**: self-managed database connected over Database Gateway
     *
     * >
     *   If the destination instance is a PolarDB for Oracle cluster, you must set this parameter to **OTHER** or **EXPRESS** because you can use a PolarDB for Oracle cluster only as a self-managed database connected over the Internet or Express Connect.
     *   If the destination instance is a Message Queue for Apache Kafka instance, you must set this parameter to **ECS** or **EXPRESS** because you can use a Message Queue for Apache Kafka instance only as a self-managed database connected over ECS or Express Connect.
     *   For more information, see [Supported databases](~~176064~~).
     *   If the destination instance is a self-managed database, you must deploy the network environment for the database. For more information, see [Preparation overview](~~146958~~).
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $sourceEndpointOwnerID;

    /**
     * @description The name of the RAM role configured for the Alibaba Cloud account that owns the source instance.
     *
     * >  This parameter is required when you migrate or synchronize data across different Alibaba Cloud accounts. For information about the permissions and authorization methods of the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](~~48468~~).
     * @example Test123456
     *
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @description The name of the database to which the objects to be migrated in the source instance belong.
     *
     * >  If the source instance is a PolarDB for Oracle cluster, a PostgreSQL database, or a MongoDB database, this parameter is available and required.
     * @example 3306
     *
     * @var string
     */
    public $sourceEndpointPort;

    /**
     * @description The database service port of the source instance.
     *
     * >  If the source instance is a self-managed database, this parameter is available and required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @description The ID of the destination instance.
     *
     * If the destination instance is an Alibaba Cloud database instance, you must specify the ID of the database instance. For example, if the destination instance is an ApsaraDB RDS for MySQL instance, you must specify the ID of the ApsaraDB RDS for MySQL instance.
     *
     * If the destination instance is a self-managed database, the value of this parameter varies with the value of the **DestinationEndpointInstanceType** parameter.****
     *
     *   If the DestinationEndpointInstanceType parameter is set to **ECS**, you must specify the ID of the ECS instance.
     *   If the DestinationEndpointInstanceType parameter is set to **DG**, you must specify the ID of the database gateway.
     *   If the DestinationEndpointInstanceType parameter is set to **EXPRESS** or **CEN**, you must specify the ID of the VPC that is connected to the source instance.
     *
     * >  If the DestinationEndpointInstanceType parameter is set to **CEN**, you must also specify the ID of the CEN instance in the Reserve parameter. For more information, see [Reserve](~~273111~~).
     * @example ram-for-dts
     *
     * @var string
     */
    public $sourceEndpointRole;

    /**
     * @description The ID of the Alibaba Cloud account to which the source instance belongs.
     *
     * >  You can specify this parameter to migrate or synchronize data across different Alibaba Cloud accounts. In this case, you must specify the **SourceEndpointRole** parameter.
     * @example dtstest
     *
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @description 数据投递链路交换机实例id
     *
     * @var string
     */
    public $sourceEndpointVSwitchID;

    /**
     * @description Specifies whether to perform incremental data migration or synchronization. Default value: false. Valid values:
     *
     *   **false**: does not perform incremental data migration or synchronization.
     *   **true**: performs incremental data migration or synchronization.
     *
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;

    /**
     * @description The ID of the DTS dedicated cluster on which the task runs.
     *
     * >  If this parameter is specified, the task is scheduled to the specified DTS dedicated cluster.
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'checkpoint'                      => 'Checkpoint',
        'dataCheckConfigure'              => 'DataCheckConfigure',
        'dataInitialization'              => 'DataInitialization',
        'dataSynchronization'             => 'DataSynchronization',
        'dbList'                          => 'DbList',
        'dedicatedClusterId'              => 'DedicatedClusterId',
        'delayNotice'                     => 'DelayNotice',
        'delayPhone'                      => 'DelayPhone',
        'delayRuleTime'                   => 'DelayRuleTime',
        'destinationEndpointDataBaseName' => 'DestinationEndpointDataBaseName',
        'destinationEndpointEngineName'   => 'DestinationEndpointEngineName',
        'destinationEndpointIP'           => 'DestinationEndpointIP',
        'destinationEndpointInstanceID'   => 'DestinationEndpointInstanceID',
        'destinationEndpointInstanceType' => 'DestinationEndpointInstanceType',
        'destinationEndpointOracleSID'    => 'DestinationEndpointOracleSID',
        'destinationEndpointOwnerID'      => 'DestinationEndpointOwnerID',
        'destinationEndpointPassword'     => 'DestinationEndpointPassword',
        'destinationEndpointPort'         => 'DestinationEndpointPort',
        'destinationEndpointRegion'       => 'DestinationEndpointRegion',
        'destinationEndpointRole'         => 'DestinationEndpointRole',
        'destinationEndpointUserName'     => 'DestinationEndpointUserName',
        'disasterRecoveryJob'             => 'DisasterRecoveryJob',
        'dtsBisLabel'                     => 'DtsBisLabel',
        'dtsInstanceId'                   => 'DtsInstanceId',
        'dtsJobId'                        => 'DtsJobId',
        'dtsJobName'                      => 'DtsJobName',
        'errorNotice'                     => 'ErrorNotice',
        'errorPhone'                      => 'ErrorPhone',
        'fileOssUrlObject'                => 'FileOssUrl',
        'jobType'                         => 'JobType',
        'ownerId'                         => 'OwnerId',
        'regionId'                        => 'RegionId',
        'reserve'                         => 'Reserve',
        'sourceEndpointDatabaseName'      => 'SourceEndpointDatabaseName',
        'sourceEndpointEngineName'        => 'SourceEndpointEngineName',
        'sourceEndpointIP'                => 'SourceEndpointIP',
        'sourceEndpointInstanceID'        => 'SourceEndpointInstanceID',
        'sourceEndpointInstanceType'      => 'SourceEndpointInstanceType',
        'sourceEndpointOracleSID'         => 'SourceEndpointOracleSID',
        'sourceEndpointOwnerID'           => 'SourceEndpointOwnerID',
        'sourceEndpointPassword'          => 'SourceEndpointPassword',
        'sourceEndpointPort'              => 'SourceEndpointPort',
        'sourceEndpointRegion'            => 'SourceEndpointRegion',
        'sourceEndpointRole'              => 'SourceEndpointRole',
        'sourceEndpointUserName'          => 'SourceEndpointUserName',
        'sourceEndpointVSwitchID'         => 'SourceEndpointVSwitchID',
        'structureInitialization'         => 'StructureInitialization',
        'synchronizationDirection'        => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->dataCheckConfigure) {
            $res['DataCheckConfigure'] = $this->dataCheckConfigure;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->delayNotice) {
            $res['DelayNotice'] = $this->delayNotice;
        }
        if (null !== $this->delayPhone) {
            $res['DelayPhone'] = $this->delayPhone;
        }
        if (null !== $this->delayRuleTime) {
            $res['DelayRuleTime'] = $this->delayRuleTime;
        }
        if (null !== $this->destinationEndpointDataBaseName) {
            $res['DestinationEndpointDataBaseName'] = $this->destinationEndpointDataBaseName;
        }
        if (null !== $this->destinationEndpointEngineName) {
            $res['DestinationEndpointEngineName'] = $this->destinationEndpointEngineName;
        }
        if (null !== $this->destinationEndpointIP) {
            $res['DestinationEndpointIP'] = $this->destinationEndpointIP;
        }
        if (null !== $this->destinationEndpointInstanceID) {
            $res['DestinationEndpointInstanceID'] = $this->destinationEndpointInstanceID;
        }
        if (null !== $this->destinationEndpointInstanceType) {
            $res['DestinationEndpointInstanceType'] = $this->destinationEndpointInstanceType;
        }
        if (null !== $this->destinationEndpointOracleSID) {
            $res['DestinationEndpointOracleSID'] = $this->destinationEndpointOracleSID;
        }
        if (null !== $this->destinationEndpointOwnerID) {
            $res['DestinationEndpointOwnerID'] = $this->destinationEndpointOwnerID;
        }
        if (null !== $this->destinationEndpointPassword) {
            $res['DestinationEndpointPassword'] = $this->destinationEndpointPassword;
        }
        if (null !== $this->destinationEndpointPort) {
            $res['DestinationEndpointPort'] = $this->destinationEndpointPort;
        }
        if (null !== $this->destinationEndpointRegion) {
            $res['DestinationEndpointRegion'] = $this->destinationEndpointRegion;
        }
        if (null !== $this->destinationEndpointRole) {
            $res['DestinationEndpointRole'] = $this->destinationEndpointRole;
        }
        if (null !== $this->destinationEndpointUserName) {
            $res['DestinationEndpointUserName'] = $this->destinationEndpointUserName;
        }
        if (null !== $this->disasterRecoveryJob) {
            $res['DisasterRecoveryJob'] = $this->disasterRecoveryJob;
        }
        if (null !== $this->dtsBisLabel) {
            $res['DtsBisLabel'] = $this->dtsBisLabel;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->errorNotice) {
            $res['ErrorNotice'] = $this->errorNotice;
        }
        if (null !== $this->errorPhone) {
            $res['ErrorPhone'] = $this->errorPhone;
        }
        if (null !== $this->fileOssUrlObject) {
            $res['FileOssUrl'] = $this->fileOssUrlObject;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reserve) {
            $res['Reserve'] = $this->reserve;
        }
        if (null !== $this->sourceEndpointDatabaseName) {
            $res['SourceEndpointDatabaseName'] = $this->sourceEndpointDatabaseName;
        }
        if (null !== $this->sourceEndpointEngineName) {
            $res['SourceEndpointEngineName'] = $this->sourceEndpointEngineName;
        }
        if (null !== $this->sourceEndpointIP) {
            $res['SourceEndpointIP'] = $this->sourceEndpointIP;
        }
        if (null !== $this->sourceEndpointInstanceID) {
            $res['SourceEndpointInstanceID'] = $this->sourceEndpointInstanceID;
        }
        if (null !== $this->sourceEndpointInstanceType) {
            $res['SourceEndpointInstanceType'] = $this->sourceEndpointInstanceType;
        }
        if (null !== $this->sourceEndpointOracleSID) {
            $res['SourceEndpointOracleSID'] = $this->sourceEndpointOracleSID;
        }
        if (null !== $this->sourceEndpointOwnerID) {
            $res['SourceEndpointOwnerID'] = $this->sourceEndpointOwnerID;
        }
        if (null !== $this->sourceEndpointPassword) {
            $res['SourceEndpointPassword'] = $this->sourceEndpointPassword;
        }
        if (null !== $this->sourceEndpointPort) {
            $res['SourceEndpointPort'] = $this->sourceEndpointPort;
        }
        if (null !== $this->sourceEndpointRegion) {
            $res['SourceEndpointRegion'] = $this->sourceEndpointRegion;
        }
        if (null !== $this->sourceEndpointRole) {
            $res['SourceEndpointRole'] = $this->sourceEndpointRole;
        }
        if (null !== $this->sourceEndpointUserName) {
            $res['SourceEndpointUserName'] = $this->sourceEndpointUserName;
        }
        if (null !== $this->sourceEndpointVSwitchID) {
            $res['SourceEndpointVSwitchID'] = $this->sourceEndpointVSwitchID;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureDtsJobAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['DataCheckConfigure'])) {
            $model->dataCheckConfigure = $map['DataCheckConfigure'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DelayNotice'])) {
            $model->delayNotice = $map['DelayNotice'];
        }
        if (isset($map['DelayPhone'])) {
            $model->delayPhone = $map['DelayPhone'];
        }
        if (isset($map['DelayRuleTime'])) {
            $model->delayRuleTime = $map['DelayRuleTime'];
        }
        if (isset($map['DestinationEndpointDataBaseName'])) {
            $model->destinationEndpointDataBaseName = $map['DestinationEndpointDataBaseName'];
        }
        if (isset($map['DestinationEndpointEngineName'])) {
            $model->destinationEndpointEngineName = $map['DestinationEndpointEngineName'];
        }
        if (isset($map['DestinationEndpointIP'])) {
            $model->destinationEndpointIP = $map['DestinationEndpointIP'];
        }
        if (isset($map['DestinationEndpointInstanceID'])) {
            $model->destinationEndpointInstanceID = $map['DestinationEndpointInstanceID'];
        }
        if (isset($map['DestinationEndpointInstanceType'])) {
            $model->destinationEndpointInstanceType = $map['DestinationEndpointInstanceType'];
        }
        if (isset($map['DestinationEndpointOracleSID'])) {
            $model->destinationEndpointOracleSID = $map['DestinationEndpointOracleSID'];
        }
        if (isset($map['DestinationEndpointOwnerID'])) {
            $model->destinationEndpointOwnerID = $map['DestinationEndpointOwnerID'];
        }
        if (isset($map['DestinationEndpointPassword'])) {
            $model->destinationEndpointPassword = $map['DestinationEndpointPassword'];
        }
        if (isset($map['DestinationEndpointPort'])) {
            $model->destinationEndpointPort = $map['DestinationEndpointPort'];
        }
        if (isset($map['DestinationEndpointRegion'])) {
            $model->destinationEndpointRegion = $map['DestinationEndpointRegion'];
        }
        if (isset($map['DestinationEndpointRole'])) {
            $model->destinationEndpointRole = $map['DestinationEndpointRole'];
        }
        if (isset($map['DestinationEndpointUserName'])) {
            $model->destinationEndpointUserName = $map['DestinationEndpointUserName'];
        }
        if (isset($map['DisasterRecoveryJob'])) {
            $model->disasterRecoveryJob = $map['DisasterRecoveryJob'];
        }
        if (isset($map['DtsBisLabel'])) {
            $model->dtsBisLabel = $map['DtsBisLabel'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['ErrorNotice'])) {
            $model->errorNotice = $map['ErrorNotice'];
        }
        if (isset($map['ErrorPhone'])) {
            $model->errorPhone = $map['ErrorPhone'];
        }
        if (isset($map['FileOssUrl'])) {
            $model->fileOssUrlObject = $map['FileOssUrl'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reserve'])) {
            $model->reserve = $map['Reserve'];
        }
        if (isset($map['SourceEndpointDatabaseName'])) {
            $model->sourceEndpointDatabaseName = $map['SourceEndpointDatabaseName'];
        }
        if (isset($map['SourceEndpointEngineName'])) {
            $model->sourceEndpointEngineName = $map['SourceEndpointEngineName'];
        }
        if (isset($map['SourceEndpointIP'])) {
            $model->sourceEndpointIP = $map['SourceEndpointIP'];
        }
        if (isset($map['SourceEndpointInstanceID'])) {
            $model->sourceEndpointInstanceID = $map['SourceEndpointInstanceID'];
        }
        if (isset($map['SourceEndpointInstanceType'])) {
            $model->sourceEndpointInstanceType = $map['SourceEndpointInstanceType'];
        }
        if (isset($map['SourceEndpointOracleSID'])) {
            $model->sourceEndpointOracleSID = $map['SourceEndpointOracleSID'];
        }
        if (isset($map['SourceEndpointOwnerID'])) {
            $model->sourceEndpointOwnerID = $map['SourceEndpointOwnerID'];
        }
        if (isset($map['SourceEndpointPassword'])) {
            $model->sourceEndpointPassword = $map['SourceEndpointPassword'];
        }
        if (isset($map['SourceEndpointPort'])) {
            $model->sourceEndpointPort = $map['SourceEndpointPort'];
        }
        if (isset($map['SourceEndpointRegion'])) {
            $model->sourceEndpointRegion = $map['SourceEndpointRegion'];
        }
        if (isset($map['SourceEndpointRole'])) {
            $model->sourceEndpointRole = $map['SourceEndpointRole'];
        }
        if (isset($map['SourceEndpointUserName'])) {
            $model->sourceEndpointUserName = $map['SourceEndpointUserName'];
        }
        if (isset($map['SourceEndpointVSwitchID'])) {
            $model->sourceEndpointVSwitchID = $map['SourceEndpointVSwitchID'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
