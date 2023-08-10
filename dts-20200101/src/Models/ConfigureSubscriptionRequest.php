<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigureSubscriptionRequest extends Model
{
    /**
     * @description The UNIX timestamp that represents the start time of change tracking. Unit: seconds.
     *
     * >  You can use a search engine to obtain a UNIX timestamp converter.
     * @example 1616902385
     *
     * @var string
     */
    public $checkpoint;

    /**
     * @description The objects for which you want to track data changes. The value must be a JSON string. For more information, see [Objects of DTS tasks](~~209545~~).
     *
     * @example {"dtstest":{"name":"dtstest","all":true}}
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The ID of the DTS dedicated cluster on which the change tracking task is scheduled to run.
     *
     * @example dtscluster_atyl3b5214uk***
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description Specifies whether to monitor the task latency. Valid values:
     *
     *   **true**: monitors the task latency.
     *   **false**: does not monitor the task latency.
     *
     * @example true
     *
     * @var bool
     */
    public $delayNotice;

    /**
     * @description The mobile numbers to which latency-related alerts are sent. Separate multiple mobile numbers with commas (,).
     *
     * >
     *   This parameter is available only for users of the China site (aliyun.com). Only mobile numbers in the Chinese mainland are supported. You can specify up to 10 mobile numbers.
     *   Users of the international site (alibabacloud.com) cannot receive alerts by using mobile phones, but can [configure alert rules for DTS tasks in the CloudMonitor console](~~175876~~).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $delayPhone;

    /**
     * @description The threshold for triggering latency-related alerts. Unit: seconds. The value must be an integer. You can set the threshold based on your business needs. To prevent jitters caused by network and database overloads, we recommend that you set the threshold to more than 10 seconds.
     *
     * >  If the **DelayNotice** parameter is set to **true**, this parameter is required.
     * @example 10
     *
     * @var int
     */
    public $delayRuleTime;

    /**
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @description The ID of the change tracking instance. You can call the [DescribeDtsJobs](~~209702~~) operation to query the instance ID.
     *
     * @example dtsy0zz3t13h7d****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the change tracking task. You can call the [DescribeDtsJobs](~~209702~~) operation to query the task ID.
     *
     * @example y0zz3t13h7d****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The name of the change tracking task.
     *
     * >  We recommend that you specify a descriptive name for easy identification. You do not need to use a unique name.
     * @var string
     */
    public $dtsJobName;

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
    public $errorNotice;

    /**
     * @description The mobile numbers to which status-related alerts are sent. Separate multiple mobile numbers with commas (,).
     *
     * >
     *   This parameter is available only for users of the China site (aliyun.com). Only mobile numbers in the Chinese mainland are supported. You can specify up to 10 mobile numbers.
     *   Users of the international site (alibabacloud.com) cannot receive alerts by using mobile phones, but can [configure alert rules for DTS tasks in the CloudMonitor console](~~175876~~).
     *
     * @example 1361234****,1371234****
     *
     * @var string
     */
    public $errorPhone;

    /**
     * @description The ID of the region in which the Data Transmission Service (DTS) instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reserved parameter of DTS. The value must be a JSON string. You can specify this parameter to add more configurations of the source or destination database to the DTS task. For example, you can specify the data storage format of the destination Kafka database and the ID of the CEN instance. For more information, see [MigrationReserved](~~176470~~).
     *
     * @example {      "srcInstanceId": "cen-9kqshqum*******"  }
     *
     * @var string
     */
    public $reserve;

    /**
     * @description The name of the source database.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceEndpointDatabaseName;

    /**
     * @description The engine of the source database. Valid values: **MySQL**, **PostgreSQL**, and **Oracle**.
     *
     * >  If the source database is a self-managed database, you must specify this parameter.
     * @example PostgreSQL
     *
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @description The endpoint of the source database.
     *
     * >  This parameter is required only when the source database is a self-managed database.
     * @example 172.16.8*.***
     *
     * @var string
     */
    public $sourceEndpointIP;

    /**
     * @description The ID of the source database.
     *
     * >  This parameter is required only when the source database is an ApsaraDB RDS for MySQL instance, a PolarDB-X 1.0 instance, or a PolarDB for MySQL cluster.
     * @example rm-bp1zc3iyqe3qw****
     *
     * @var string
     */
    public $sourceEndpointInstanceID;

    /**
     * @description The type of the source database. Valid values:
     *
     *   **RDS**: ApsaraDB RDS for MySQL instance
     *   **PolarDB**: PolarDB for MySQL cluster
     *   **DRDS**: PolarDB-X 1.0 instance
     *   **LocalInstance**: self-managed database with a public IP address
     *   **ECS**: self-managed database hosted on an Elastic Compute Service (ECS) instance
     *   **Express**: self-managed database connected over Express Connect
     *   **CEN**: self-managed database connected over Cloud Enterprise Network (CEN)
     *   **dg**: self-managed database connected over Database Gateway
     *
     * @example RDS
     *
     * @var string
     */
    public $sourceEndpointInstanceType;

    /**
     * @description The system ID (SID) of the Oracle database.
     *
     * >  This parameter is required only when the source database is a self-managed Oracle database and is not deployed in the Real Application Clusters (RAC) architecture.
     * @example testsid
     *
     * @var string
     */
    public $sourceEndpointOracleSID;

    /**
     * @description The ID of the Alibaba Cloud account to which the source database belongs.
     *
     * >  This parameter is required only when you track data changes across different Alibaba Cloud accounts.
     * @example 140692647406****
     *
     * @var string
     */
    public $sourceEndpointOwnerID;

    /**
     * @description The password of the account that is used to connect to the source database.
     *
     * @example Test123456
     *
     * @var string
     */
    public $sourceEndpointPassword;

    /**
     * @description The service port number of the source database.
     *
     * >  This parameter is required only when the source database is a self-managed database.
     * @example 3306
     *
     * @var string
     */
    public $sourceEndpointPort;

    /**
     * @description The ID of the region in which the source database resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >  If the source database is a self-managed database with a public IP address, you can set the value of this parameter to **cn-hangzhou** or the ID of the region that is closest to the region in which the self-managed database resides.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceEndpointRegion;

    /**
     * @description The RAM role that is authorized to access the source database. This parameter is required if the source database does not belong to the Alibaba Cloud account that you use to configure the change tracking task. In this case, you must authorize the Alibaba Cloud account to access the source database by using a RAM role.
     *
     * >  For more information about the permissions that are required for the RAM role and how to grant the permissions to the RAM role, see [Configure RAM authorization for cross-account data migration and synchronization](~~48468~~).
     * @example ram-for-dts
     *
     * @var string
     */
    public $sourceEndpointRole;

    /**
     * @description The username of the account that is used to connect to the source database.
     *
     * >  The permissions that are required for the database account vary with the change tracking scenario. For more information, see [Prepare the source database account for change tracking](~~212653~~).
     * @example dtstest
     *
     * @var string
     */
    public $sourceEndpointUserName;

    /**
     * @description Specifies whether to track DDL statements. Default value: true. Valid values:
     *
     *   **true**: tracks DDL statements.
     *   **false**: does not track DDL statements.
     *
     * @example true
     *
     * @var bool
     */
    public $subscriptionDataTypeDDL;

    /**
     * @description Specifies whether to track DML statements. Default value: true. Valid values:
     *
     *   **true**: tracks DML statements.
     *   **false**: does not track DML statements.
     *
     * @example true
     *
     * @var bool
     */
    public $subscriptionDataTypeDML;

    /**
     * @description The network type of the change tracking task. Set the value to **vpc**. A value of vpc indicates the Virtual Private Cloud (VPC) network type.
     *
     * >
     *   To use the new version of the change tracking feature, you must specify the SubscriptionInstanceNetworkType parameter. You must also specify the **SubscriptionInstanceVPCId** and **SubscriptionInstanceVSwitchID** parameters. If you do not specify the SubscriptionInstanceNetworkType parameter, the previous version of the change tracking feature is used.
     *   The previous version of the change tracking feature supports self-managed MySQL databases, ApsaraDB RDS for MySQL instances, and PolarDB-X 1.0 instances. The new version of the change tracking feature supports self-managed MySQL databases, ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and Oracle databases.
     *
     * @example vpc
     *
     * @var string
     */
    public $subscriptionInstanceNetworkType;

    /**
     * @description The ID of the VPC in which the change tracking instance is deployed.
     *
     * >  This parameter is required only when the **SubscriptionInstanceNetworkType** parameter is set to **vpc**.
     * @example vpc-bp1vwnn14rqpyiczj****
     *
     * @var string
     */
    public $subscriptionInstanceVPCId;

    /**
     * @description The ID of the vSwitch in the specified VPC.
     *
     * >  This parameter is required only when the **SubscriptionInstanceNetworkType** parameter is set to **vpc**.
     * @example vsw-bp10df3mxae6lpmku****
     *
     * @var string
     */
    public $subscriptionInstanceVSwitchId;
    protected $_name = [
        'checkpoint'                      => 'Checkpoint',
        'dbList'                          => 'DbList',
        'dedicatedClusterId'              => 'DedicatedClusterId',
        'delayNotice'                     => 'DelayNotice',
        'delayPhone'                      => 'DelayPhone',
        'delayRuleTime'                   => 'DelayRuleTime',
        'dtsBisLabel'                     => 'DtsBisLabel',
        'dtsInstanceId'                   => 'DtsInstanceId',
        'dtsJobId'                        => 'DtsJobId',
        'dtsJobName'                      => 'DtsJobName',
        'errorNotice'                     => 'ErrorNotice',
        'errorPhone'                      => 'ErrorPhone',
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
        'subscriptionDataTypeDDL'         => 'SubscriptionDataTypeDDL',
        'subscriptionDataTypeDML'         => 'SubscriptionDataTypeDML',
        'subscriptionInstanceNetworkType' => 'SubscriptionInstanceNetworkType',
        'subscriptionInstanceVPCId'       => 'SubscriptionInstanceVPCId',
        'subscriptionInstanceVSwitchId'   => 'SubscriptionInstanceVSwitchId',
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
        if (null !== $this->subscriptionDataTypeDDL) {
            $res['SubscriptionDataTypeDDL'] = $this->subscriptionDataTypeDDL;
        }
        if (null !== $this->subscriptionDataTypeDML) {
            $res['SubscriptionDataTypeDML'] = $this->subscriptionDataTypeDML;
        }
        if (null !== $this->subscriptionInstanceNetworkType) {
            $res['SubscriptionInstanceNetworkType'] = $this->subscriptionInstanceNetworkType;
        }
        if (null !== $this->subscriptionInstanceVPCId) {
            $res['SubscriptionInstanceVPCId'] = $this->subscriptionInstanceVPCId;
        }
        if (null !== $this->subscriptionInstanceVSwitchId) {
            $res['SubscriptionInstanceVSwitchId'] = $this->subscriptionInstanceVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
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
        if (isset($map['SubscriptionDataTypeDDL'])) {
            $model->subscriptionDataTypeDDL = $map['SubscriptionDataTypeDDL'];
        }
        if (isset($map['SubscriptionDataTypeDML'])) {
            $model->subscriptionDataTypeDML = $map['SubscriptionDataTypeDML'];
        }
        if (isset($map['SubscriptionInstanceNetworkType'])) {
            $model->subscriptionInstanceNetworkType = $map['SubscriptionInstanceNetworkType'];
        }
        if (isset($map['SubscriptionInstanceVPCId'])) {
            $model->subscriptionInstanceVPCId = $map['SubscriptionInstanceVPCId'];
        }
        if (isset($map['SubscriptionInstanceVSwitchId'])) {
            $model->subscriptionInstanceVSwitchId = $map['SubscriptionInstanceVSwitchId'];
        }

        return $model;
    }
}
