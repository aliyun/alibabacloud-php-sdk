<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\dataEtlStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\performance;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\retryState;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\reverseJob;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\structureInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\tagList;
use AlibabaCloud\Tea\Model;

class subSyncJob extends Model
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
     * @description The start offset of incremental data migration or data synchronization. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1616405159
     *
     * @var string
     */
    public $checkpoint;

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
     * @example 2023-01-12T08:34:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The state of the ETL task.
     *
     * > This parameter collection is returned only if an ETL task is configured.
     * @var dataEtlStatus
     */
    public $dataEtlStatus;

    /**
     * @description The state of full data migration or initial full data synchronization.
     *
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

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
     * @description The latency of incremental data migration or synchronization. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $delay;

    /**
     * @description The network type of the consumer client. Valid values:
     *
     *   **CLASSIC**: classic network.
     *   **VPC**: VPC.
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
     * @description The DTS instance ID.
     *
     * @example dtsnjuc14kp12u****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The instance class.
     *
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
     * @description The DTS task ID.
     *
     * @example m06j1g92124****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The DTS instance name.
     *
     * @example dtstest****
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The end of the time range for change tracking. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-03-26T14:03:21Z
     *
     * @var string
     */
    public $endTimestamp;

    /**
     * @description The error message returned if the task failed.
     *
     * @example DTS-070211: Connect Source DB failed. cause by ****
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The operator information of the ETL task.
     *
     * > This parameter is returned only if you query the details of an ETL task.
     * @example { "cells ": [{\\"shape\\":\\"edge\\",\\"attrs\\":{\\"line\\":{\\"stroke\\":\\"#b1b1b1\\",\\"strokeWidth\\":1,\\"targetMarker\\":{\\"name\\":\\"block\\",\\"args\\":{\\"size\\":\\"8\\"}},\\"strokeDasharray\\":\\"\\"}},\\"id\\":\\"cd1ec473-f9b9-4e9b-a742-ac23f442****\\",\\"source\\":{\\"cell\\":\\"8b261182-bfab-4803-ad8e-6bb08e3e****\\",\\"port\\":\\"out1\\"},\\"target\\":{\\"cell\\":\\"b36770df-f48c-4d6b-9644-54c5e924****\\",\\"port\\":\\"in1\\"},\\"zIndex\\":7 }] }
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
     * @description Indicates whether the task is a subtask. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDemoJob;

    /**
     * @description The type of the DTS task. Valid values:
     *
     *   **online**: data migration task.
     *   **SYNC**: data synchronization task.
     *   **SUBSCRIBE**: change tracking task.
     *
     * @example SYNC
     *
     * @var string
     */
    public $jobType;

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
     * @description The source of the task. Valid values:
     *
     *   **PTS**
     *   **DMS**
     *   **DTS**
     *
     * @example PTS
     *
     * @var string
     */
    public $originType;

    /**
     * @description The billing method. Valid values:
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
     * @description The performance of the data migration or synchronization instance.
     *
     * @var performance
     */
    public $performance;

    /**
     * @description The precheck state.
     *
     * @var precheckStatus
     */
    public $precheckStatus;

    /**
     * @description The reserved parameter of DTS. The value is a JSON string. You can specify this parameter to meet specific requirements, such as whether to automatically start a precheck. For more information, see [MigrationReserved](https://help.aliyun.com/document_detail/176470.html).
     *
     * @example {\\"srcHostPorts\\":\\"\\",\\"whitelist.dms.online.ddl.enable\\":false,\\"filterDDL\\":false,\\"sqlparser.dms.original.ddl\\":true,\\"srcOracleType\\":\\"sid\\",\\"maxRetryTime\\":43200,\\"destSSL\\":\\"0\\",\\"destOracleType\\":\\"sid\\",\\"srcSSL\\":\\"0\\",\\"dbListCaseChangeMode\\":\\"default\\",\\"SourceEngineVersion\\":\\"8.0.18\\",\\"srcNetType\\":\\"VPC\\",\\"destNetType\\":\\"VPC\\",\\"srcVpcNetMappingInst\\":\\"172.16.1**.**:10803\\",\\"destVpcNetMappingInst\\":\\"172.16.1**.**:11077\\",\\"useJobTask\\":\\"1\\"}
     *
     * @var string
     */
    public $reserved;

    /**
     * @description The information about the retries performed by DTS due to an exception.
     *
     * @var retryState
     */
    public $retryState;

    /**
     * @description The details of the data synchronization task in the reverse direction.
     *
     * > This parameter is returned only for two-way data synchronization tasks.
     * @var reverseJob
     */
    public $reverseJob;

    /**
     * @description The connection settings of the source instance.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The state of initial schema synchronization. Valid values:
     *
     *   **NotStarted**: The task is not started.
     *   **Migrating**: The task is in progress.
     *   **Failed**: The task failed.
     *   **Finished**: The task is complete.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description Initialization status of library table structure.
     *
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;

    /**
     * @description The information about the subtasks in the current data synchronization task.
     *
     * @var mixed[]
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
     * @description The tags of the task.
     *
     * @var tagList[]
     */
    public $tagList;

    /**
     * @description The task type.
     *
     * @example rds
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'appName'                       => 'AppName',
        'beginTimestamp'                => 'BeginTimestamp',
        'checkpoint'                    => 'Checkpoint',
        'consumptionCheckpoint'         => 'ConsumptionCheckpoint',
        'consumptionClient'             => 'ConsumptionClient',
        'createTime'                    => 'CreateTime',
        'dataEtlStatus'                 => 'DataEtlStatus',
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'databaseCount'                 => 'DatabaseCount',
        'dbObject'                      => 'DbObject',
        'delay'                         => 'Delay',
        'destNetType'                   => 'DestNetType',
        'destinationEndpoint'           => 'DestinationEndpoint',
        'dtsInstanceID'                 => 'DtsInstanceID',
        'dtsJobClass'                   => 'DtsJobClass',
        'dtsJobDirection'               => 'DtsJobDirection',
        'dtsJobId'                      => 'DtsJobId',
        'dtsJobName'                    => 'DtsJobName',
        'endTimestamp'                  => 'EndTimestamp',
        'errorMessage'                  => 'ErrorMessage',
        'etlCalculator'                 => 'EtlCalculator',
        'expireTime'                    => 'ExpireTime',
        'finishTime'                    => 'FinishTime',
        'groupId'                       => 'GroupId',
        'isDemoJob'                     => 'IsDemoJob',
        'jobType'                       => 'JobType',
        'maxDu'                         => 'MaxDu',
        'migrationMode'                 => 'MigrationMode',
        'minDu'                         => 'MinDu',
        'originType'                    => 'OriginType',
        'payType'                       => 'PayType',
        'performance'                   => 'Performance',
        'precheckStatus'                => 'PrecheckStatus',
        'reserved'                      => 'Reserved',
        'retryState'                    => 'RetryState',
        'reverseJob'                    => 'ReverseJob',
        'sourceEndpoint'                => 'SourceEndpoint',
        'status'                        => 'Status',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'subSyncJob'                    => 'SubSyncJob',
        'subscribeTopic'                => 'SubscribeTopic',
        'subscriptionDataType'          => 'SubscriptionDataType',
        'subscriptionHost'              => 'SubscriptionHost',
        'synchronizationDirection'      => 'SynchronizationDirection',
        'tagList'                       => 'TagList',
        'taskType'                      => 'TaskType',
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
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
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
        if (null !== $this->dataEtlStatus) {
            $res['DataEtlStatus'] = null !== $this->dataEtlStatus ? $this->dataEtlStatus->toMap() : null;
        }
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toMap() : null;
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
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->destNetType) {
            $res['DestNetType'] = $this->destNetType;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
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
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
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
        if (null !== $this->isDemoJob) {
            $res['IsDemoJob'] = $this->isDemoJob;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (null !== $this->originType) {
            $res['OriginType'] = $this->originType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toMap() : null;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->retryState) {
            $res['RetryState'] = null !== $this->retryState ? $this->retryState->toMap() : null;
        }
        if (null !== $this->reverseJob) {
            $res['ReverseJob'] = null !== $this->reverseJob ? $this->reverseJob->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toMap() : null;
        }
        if (null !== $this->subSyncJob) {
            $res['SubSyncJob'] = $this->subSyncJob;
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
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subSyncJob
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
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
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
        if (isset($map['DataEtlStatus'])) {
            $model->dataEtlStatus = dataEtlStatus::fromMap($map['DataEtlStatus']);
        }
        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
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
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DestNetType'])) {
            $model->destNetType = $map['DestNetType'];
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
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
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
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
        if (isset($map['IsDemoJob'])) {
            $model->isDemoJob = $map['IsDemoJob'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
        if (isset($map['OriginType'])) {
            $model->originType = $map['OriginType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }
        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['RetryState'])) {
            $model->retryState = retryState::fromMap($map['RetryState']);
        }
        if (isset($map['ReverseJob'])) {
            $model->reverseJob = reverseJob::fromMap($map['ReverseJob']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }
        if (isset($map['SubSyncJob'])) {
            if (!empty($map['SubSyncJob'])) {
                $model->subSyncJob = $map['SubSyncJob'];
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
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
