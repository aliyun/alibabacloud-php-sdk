<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\dataDeliveryChannelInfo;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\retryState;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;
use AlibabaCloud\Tea\Model;

class DescribeDtsJobDetailResponseBody extends Model
{
    /**
     * @description Indicates whether the new change tracking feature is used.
     *
     * > This parameter is returned only for change tracking instances of the new version.
     * @example new
     *
     * @var string
     */
    public $appName;

    /**
     * @description The start of the time range for change tracking. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-15T08:25:34Z
     *
     * @var string
     */
    public $beginTimestamp;

    /**
     * @description The binary logs.
     *
     * @example ****
     *
     * @var string
     */
    public $binlog;

    /**
     * @description The current offset.
     *
     * @example 156629109****
     *
     * @var string
     */
    public $binlogSite;

    /**
     * @description The offset range.
     *
     * @example ****
     *
     * @var string
     */
    public $binlogTime;

    /**
     * @description The time when the task was started. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-30T03:36:11.000
     *
     * @var string
     */
    public $bootTime;

    /**
     * @description The start offset of incremental data migration or data synchronization. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1616405159
     *
     * @var int
     */
    public $checkpoint;

    /**
     * @description The error code. This parameter will be removed in the future.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The consumption checkpoint of the change tracking instance. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-23T07:30:31Z
     *
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @description The downstream client information in the following format: \\<IP address of the downstream client>:\\<Random ID generated by DTS>.
     *
     * @example 114.***.***.**:dts********
     *
     * @var string
     */
    public $consumptionClient;

    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-16T08:01:19Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The information about the data shipping channel.
     *
     * @var dataDeliveryChannelInfo
     */
    public $dataDeliveryChannelInfo;

    /**
     * @description The state of incremental data migration or synchronization.
     *
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @description The number of ApsaraDB RDS for MySQL instances that are attached to the source PolarDB-X 1.0 instance.
     *
     * @example 2
     *
     * @var int
     */
    public $databaseCount;

    /**
     * @description The objects of the data migration, data synchronization, or change tracking task. For more information, see [Objects of DTS tasks](https://help.aliyun.com/document_detail/209545.html).
     *
     * @example {\\"dtstestdata\\":{\\"all\\":true,\\"name\\":\\"dtstestdata\\",\\"state\\":\\"normal\\"}}
     *
     * @var string
     */
    public $dbObject;

    /**
     * @description The dedicated cluster ID.
     *
     * @example dtsxxxxx
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The latency of incremental data migration or synchronization. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delay;

    /**
     * @description Indicates whether the task is a subtask. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $demoJob;

    /**
     * @description The network type of the consumer client. Valid values:
     *
     *   **CLASSIC**: classic network.
     *   **VPC**: virtual private cloud (VPC).
     *
     * @example VPC
     *
     * @var string
     */
    public $destNetType;

    /**
     * @description The connection settings of the destination instance.
     *
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @description The environment tag of the DTS instance. Valid values:
     *
     *   **normal******
     *   **online******
     *
     * @example normal
     *
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example dtsi03e3zty16i****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The instance class.
     *
     * > For more information about the description and test performance of each instance class, see [Specifications of data migration instances](https://help.aliyun.com/document_detail/26606.html) and [Specifications of data synchronization instances](https://help.aliyun.com/document_detail/26605.html).
     * @example xlarge
     *
     * @var string
     */
    public $dtsJobClass;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * > This parameter is returned only if the topology of the data synchronization instance is two-way synchronization.
     * @example Forward
     *
     * @var string
     */
    public $dtsJobDirection;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example i03e3zty16i****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The name of the data migration, data synchronization, or change tracking task.
     *
     * @example api_test
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The dynamic part in the error message. The value of this parameter is used to replace **%s** in the value of **ErrMessage**.
     *
     * > For example, if the return value of **ErrMessage** is **The Value of Input Parameter %s is not valid** and the value of **DynamicMessage** is **DtsJobId**, the specified value of **DtsJobId** is invalid.
     * @example DtsJobId
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The end of the time range for change tracking. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-26T14:03:21Z
     *
     * @var string
     */
    public $endTimestamp;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The Value of Input Parameter %s is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error message returned if the task failed.
     *
     * @example DTS-070211: Connect Source DB failed. cause by [com.mysql.jdbc.exceptions.jdbc4.MySQLNonTransientConnectionException:Could not create connection to database server. Attempted reconnect 3 times. Giving up.][com.mysql.jdbc.exceptions.jdbc4.CommunicationsException:Communications link failure\\n\\nThe last packet sent successfully to the server was 0 milliseconds ago. The driver has not received any packets from the server.][java.net.ConnectException:Connection timed out (Connection timed out)] About more information in [https://yq.aliyun.com/articles/499178].
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The operator information of the ETL task.
     *
     * > This parameter is returned only if you query the details of an ETL task.
     * @example { 	"cells ": [{\\"shape\\":\\"edge\\",\\"attrs\\":{\\"line\\":{\\"stroke\\":\\"#b1b1b1\\",\\"strokeWidth\\":1,\\"targetMarker\\":{\\"name\\":\\"block\\",\\"args\\":{\\"size\\":\\"8\\"}},\\"strokeDasharray\\":\\"\\"}},\\"id\\":\\"cd1ec473-f9b9-4e9b-a742-ac23f442****\\",\\"source\\":{\\"cell\\":\\"8b261182-bfab-4803-ad8e-6bb08e3e****\\",\\"port\\":\\"out1\\"},\\"target\\":{\\"cell\\":\\"b36770df-f48c-4d6b-9644-54c5e924****\\",\\"port\\":\\"in1\\"},\\"zIndex\\":7 	}] }
     *
     * @var string
     */
    public $etlCalculator;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > This parameter is returned only if the return value of **PayType** is **PrePaid**.
     * @example 2023-06-16T08:01:19Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the task was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2023-06-16T10:34:17Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The returned HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The type of the DTS task. Valid values:
     *
     *   **sync**: a data synchronization task.
     *   **subSync**: a subtask generated when the objects to be synchronized are modified.
     *
     * > In most cases, this parameter is returned together with **TaskType**.
     * @example sync
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The timestamp when the task was last updated.
     *
     * @example 156629109****
     *
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @description The maximum number of DUs.
     *
     * > This parameter is supported only for serverless instances.
     * @example 16
     *
     * @var float
     */
    public $maxDu;

    /**
     * @description The migration types or initial synchronization types.
     *
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @description The minimum number of DUs.
     *
     * > This parameter is supported only for serverless instances.
     * @example 1
     *
     * @var float
     */
    public $minDu;

    /**
     * @description The billing method of the DTS instance. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The request ID.
     *
     * @example 29207299-7C41-493A-BA4F-2FAC5DE4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet specific requirements, such as whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
     *
     * @example {\\"srcHostPorts\\":\\"\\",\\"whitelist.dms.online.ddl.enable\\":false,\\"filterDDL\\":false,\\"sqlparser.dms.original.ddl\\":true,\\"srcOracleType\\":\\"sid\\",\\"maxRetryTime\\":43200,\\"destSSL\\":\\"0\\",\\"destOracleType\\":\\"sid\\",\\"srcSSL\\":\\"0\\",\\"dbListCaseChangeMode\\":\\"default\\",\\"SourceEngineVersion\\":\\"8.0.18\\",\\"srcNetType\\":\\"VPC\\",\\"destNetType\\":\\"VPC\\",\\"srcVpcNetMappingInst\\":\\"172.16.1**.**:10803\\",\\"destVpcNetMappingInst\\":\\"172.16.1**.**:11077\\",\\"useJobTask\\":\\"1\\"}
     *
     * @var string
     */
    public $reserved;

    /**
     * @description The resource group name.
     *
     * @example default resource group
     *
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the retries performed by DTS due to an exception.
     *
     * @var retryState
     */
    public $retryState;

    /**
     * @description The connection settings of the source instance.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The state of the data migration or synchronization task. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **NotConfigured**: The task is not configured.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **Initializing**: Initial data synchronization is in progress.
     *   **InitializeFailed**: Initial data synchronization failed.
     *   **synchronizing**: Data synchronization is in progress.
     *   **Migrating**: Data migration is in progress.
     *   **Failed**: Data synchronization failed.
     *   **MigrationFailed**: Data migration failed.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects of the task are being modified.
     *   **Retrying**: The task is being retried.
     *   **Upgrade**: The task is being upgraded.
     *   **Downgrade**: The task is being downgraded.
     *   **Locked**: The task is locked.
     *   **Finished**: The task is complete.
     *
     * @example Migrating
     *
     * @var string
     */
    public $status;

    /**
     * @description The information about the subtasks in the current distributed task. If the DTS task is not a distributed task, the value of this parameter is null.
     *
     * > This parameter is available only if the DTS task is a data synchronization task.
     * @var subDistributedJob[]
     */
    public $subDistributedJob;

    /**
     * @description The information about the subtasks in the current data synchronization task.
     *
     * @var subSyncJob[]
     */
    public $subSyncJob;

    /**
     * @description The topic of the change tracking instance.
     *
     * > This parameter is returned only if your change tracking instances are of the new version and you have called the [CreateConsumerGroup](https://help.aliyun.com/document_detail/122863.html) operation to create a consumer group.
     * @example cn_hangzhou_rm_bp1162kryivb8****_dtstest_version2
     *
     * @var string
     */
    public $subscribeTopic;

    /**
     * @description The type of data for change tracking.
     *
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

    /**
     * @description The endpoint of the change tracking instance.
     *
     * @var subscriptionHost
     */
    public $subscriptionHost;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * >
     *
     *   The default value is **Forward**.
     *   The value **Reverse** takes effect only if the topology of the data synchronization instance is two-way synchronization.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The type of the task.
     *
     * > In most cases, this parameter is returned together with **JobType**.
     * @example Distributed_xxx
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'appName'                   => 'AppName',
        'beginTimestamp'            => 'BeginTimestamp',
        'binlog'                    => 'Binlog',
        'binlogSite'                => 'BinlogSite',
        'binlogTime'                => 'BinlogTime',
        'bootTime'                  => 'BootTime',
        'checkpoint'                => 'Checkpoint',
        'code'                      => 'Code',
        'consumptionCheckpoint'     => 'ConsumptionCheckpoint',
        'consumptionClient'         => 'ConsumptionClient',
        'createTime'                => 'CreateTime',
        'dataDeliveryChannelInfo'   => 'DataDeliveryChannelInfo',
        'dataSynchronizationStatus' => 'DataSynchronizationStatus',
        'databaseCount'             => 'DatabaseCount',
        'dbObject'                  => 'DbObject',
        'dedicatedClusterId'        => 'DedicatedClusterId',
        'delay'                     => 'Delay',
        'demoJob'                   => 'DemoJob',
        'destNetType'               => 'DestNetType',
        'destinationEndpoint'       => 'DestinationEndpoint',
        'dtsBisLabel'               => 'DtsBisLabel',
        'dtsInstanceID'             => 'DtsInstanceID',
        'dtsJobClass'               => 'DtsJobClass',
        'dtsJobDirection'           => 'DtsJobDirection',
        'dtsJobId'                  => 'DtsJobId',
        'dtsJobName'                => 'DtsJobName',
        'dynamicMessage'            => 'DynamicMessage',
        'endTimestamp'              => 'EndTimestamp',
        'errCode'                   => 'ErrCode',
        'errMessage'                => 'ErrMessage',
        'errorMessage'              => 'ErrorMessage',
        'etlCalculator'             => 'EtlCalculator',
        'expireTime'                => 'ExpireTime',
        'finishTime'                => 'FinishTime',
        'groupId'                   => 'GroupId',
        'httpStatusCode'            => 'HttpStatusCode',
        'jobType'                   => 'JobType',
        'lastUpdateTime'            => 'LastUpdateTime',
        'maxDu'                     => 'MaxDu',
        'migrationMode'             => 'MigrationMode',
        'minDu'                     => 'MinDu',
        'payType'                   => 'PayType',
        'requestId'                 => 'RequestId',
        'reserved'                  => 'Reserved',
        'resourceGroupDisplayName'  => 'ResourceGroupDisplayName',
        'resourceGroupId'           => 'ResourceGroupId',
        'retryState'                => 'RetryState',
        'sourceEndpoint'            => 'SourceEndpoint',
        'status'                    => 'Status',
        'subDistributedJob'         => 'SubDistributedJob',
        'subSyncJob'                => 'SubSyncJob',
        'subscribeTopic'            => 'SubscribeTopic',
        'subscriptionDataType'      => 'SubscriptionDataType',
        'subscriptionHost'          => 'SubscriptionHost',
        'success'                   => 'Success',
        'synchronizationDirection'  => 'SynchronizationDirection',
        'taskType'                  => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->beginTimestamp) {
            $res['BeginTimestamp'] = $this->beginTimestamp;
        }
        if (null !== $this->binlog) {
            $res['Binlog'] = $this->binlog;
        }
        if (null !== $this->binlogSite) {
            $res['BinlogSite'] = $this->binlogSite;
        }
        if (null !== $this->binlogTime) {
            $res['BinlogTime'] = $this->binlogTime;
        }
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consumptionCheckpoint) {
            $res['ConsumptionCheckpoint'] = $this->consumptionCheckpoint;
        }
        if (null !== $this->consumptionClient) {
            $res['ConsumptionClient'] = $this->consumptionClient;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataDeliveryChannelInfo) {
            $res['DataDeliveryChannelInfo'] = null !== $this->dataDeliveryChannelInfo ? $this->dataDeliveryChannelInfo->toMap() : null;
        }
        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toMap() : null;
        }
        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }
        if (null !== $this->dbObject) {
            $res['DbObject'] = $this->dbObject;
        }
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->demoJob) {
            $res['DemoJob'] = $this->demoJob;
        }
        if (null !== $this->destNetType) {
            $res['DestNetType'] = $this->destNetType;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->dtsBisLabel) {
            $res['DtsBisLabel'] = $this->dtsBisLabel;
        }
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobClass) {
            $res['DtsJobClass'] = $this->dtsJobClass;
        }
        if (null !== $this->dtsJobDirection) {
            $res['DtsJobDirection'] = $this->dtsJobDirection;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->etlCalculator) {
            $res['EtlCalculator'] = $this->etlCalculator;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->resourceGroupDisplayName) {
            $res['ResourceGroupDisplayName'] = $this->resourceGroupDisplayName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->retryState) {
            $res['RetryState'] = null !== $this->retryState ? $this->retryState->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDistributedJob) {
            $res['SubDistributedJob'] = [];
            if (null !== $this->subDistributedJob && \is_array($this->subDistributedJob)) {
                $n = 0;
                foreach ($this->subDistributedJob as $item) {
                    $res['SubDistributedJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subSyncJob) {
            $res['SubSyncJob'] = [];
            if (null !== $this->subSyncJob && \is_array($this->subSyncJob)) {
                $n = 0;
                foreach ($this->subSyncJob as $item) {
                    $res['SubSyncJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subscribeTopic) {
            $res['SubscribeTopic'] = $this->subscribeTopic;
        }
        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toMap() : null;
        }
        if (null !== $this->subscriptionHost) {
            $res['SubscriptionHost'] = null !== $this->subscriptionHost ? $this->subscriptionHost->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BeginTimestamp'])) {
            $model->beginTimestamp = $map['BeginTimestamp'];
        }
        if (isset($map['Binlog'])) {
            $model->binlog = $map['Binlog'];
        }
        if (isset($map['BinlogSite'])) {
            $model->binlogSite = $map['BinlogSite'];
        }
        if (isset($map['BinlogTime'])) {
            $model->binlogTime = $map['BinlogTime'];
        }
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsumptionCheckpoint'])) {
            $model->consumptionCheckpoint = $map['ConsumptionCheckpoint'];
        }
        if (isset($map['ConsumptionClient'])) {
            $model->consumptionClient = $map['ConsumptionClient'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataDeliveryChannelInfo'])) {
            $model->dataDeliveryChannelInfo = dataDeliveryChannelInfo::fromMap($map['DataDeliveryChannelInfo']);
        }
        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }
        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }
        if (isset($map['DbObject'])) {
            $model->dbObject = $map['DbObject'];
        }
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DemoJob'])) {
            $model->demoJob = $map['DemoJob'];
        }
        if (isset($map['DestNetType'])) {
            $model->destNetType = $map['DestNetType'];
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['DtsBisLabel'])) {
            $model->dtsBisLabel = $map['DtsBisLabel'];
        }
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobClass'])) {
            $model->dtsJobClass = $map['DtsJobClass'];
        }
        if (isset($map['DtsJobDirection'])) {
            $model->dtsJobDirection = $map['DtsJobDirection'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['EtlCalculator'])) {
            $model->etlCalculator = $map['EtlCalculator'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }
        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
        }
        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RetryState'])) {
            $model->retryState = retryState::fromMap($map['RetryState']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDistributedJob'])) {
            if (!empty($map['SubDistributedJob'])) {
                $model->subDistributedJob = [];
                $n                        = 0;
                foreach ($map['SubDistributedJob'] as $item) {
                    $model->subDistributedJob[$n++] = null !== $item ? subDistributedJob::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubSyncJob'])) {
            if (!empty($map['SubSyncJob'])) {
                $model->subSyncJob = [];
                $n                 = 0;
                foreach ($map['SubSyncJob'] as $item) {
                    $model->subSyncJob[$n++] = null !== $item ? subSyncJob::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubscribeTopic'])) {
            $model->subscribeTopic = $map['SubscribeTopic'];
        }
        if (isset($map['SubscriptionDataType'])) {
            $model->subscriptionDataType = subscriptionDataType::fromMap($map['SubscriptionDataType']);
        }
        if (isset($map['SubscriptionHost'])) {
            $model->subscriptionHost = subscriptionHost::fromMap($map['SubscriptionHost']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
