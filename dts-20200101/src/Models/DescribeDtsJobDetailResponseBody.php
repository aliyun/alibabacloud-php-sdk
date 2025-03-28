<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;
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

class DescribeDtsJobDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $beginTimestamp;

    /**
     * @var string
     */
    public $binlog;

    /**
     * @var string
     */
    public $binlogSite;

    /**
     * @var string
     */
    public $binlogTime;

    /**
     * @var string
     */
    public $bootTime;

    /**
     * @var int
     */
    public $checkpoint;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $consumptionCheckpoint;

    /**
     * @var string
     */
    public $consumptionClient;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataDeliveryChannelInfo
     */
    public $dataDeliveryChannelInfo;

    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @var int
     */
    public $databaseCount;

    /**
     * @var string
     */
    public $dbObject;

    /**
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var bool
     */
    public $demoJob;

    /**
     * @var string
     */
    public $destNetType;

    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @var string
     */
    public $dtsJobClass;

    /**
     * @var string
     */
    public $dtsJobDirection;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $dtsJobName;

    /**
     * @var string
     */
    public $dynamicMessage;

    /**
     * @var string
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $etlCalculator;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var float
     */
    public $maxDu;

    /**
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @var float
     */
    public $minDu;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $resourceGroupDisplayName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var retryState
     */
    public $retryState;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subDistributedJob[]
     */
    public $subDistributedJob;

    /**
     * @var subSyncJob[]
     */
    public $subSyncJob;

    /**
     * @var string
     */
    public $subscribeTopic;

    /**
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

    /**
     * @var subscriptionHost
     */
    public $subscriptionHost;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'appName' => 'AppName',
        'beginTimestamp' => 'BeginTimestamp',
        'binlog' => 'Binlog',
        'binlogSite' => 'BinlogSite',
        'binlogTime' => 'BinlogTime',
        'bootTime' => 'BootTime',
        'checkpoint' => 'Checkpoint',
        'code' => 'Code',
        'consumptionCheckpoint' => 'ConsumptionCheckpoint',
        'consumptionClient' => 'ConsumptionClient',
        'createTime' => 'CreateTime',
        'dataDeliveryChannelInfo' => 'DataDeliveryChannelInfo',
        'dataSynchronizationStatus' => 'DataSynchronizationStatus',
        'databaseCount' => 'DatabaseCount',
        'dbObject' => 'DbObject',
        'dedicatedClusterId' => 'DedicatedClusterId',
        'delay' => 'Delay',
        'demoJob' => 'DemoJob',
        'destNetType' => 'DestNetType',
        'destinationEndpoint' => 'DestinationEndpoint',
        'dtsBisLabel' => 'DtsBisLabel',
        'dtsInstanceID' => 'DtsInstanceID',
        'dtsJobClass' => 'DtsJobClass',
        'dtsJobDirection' => 'DtsJobDirection',
        'dtsJobId' => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'dynamicMessage' => 'DynamicMessage',
        'endTimestamp' => 'EndTimestamp',
        'errCode' => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'errorMessage' => 'ErrorMessage',
        'etlCalculator' => 'EtlCalculator',
        'expireTime' => 'ExpireTime',
        'finishTime' => 'FinishTime',
        'groupId' => 'GroupId',
        'httpStatusCode' => 'HttpStatusCode',
        'jobType' => 'JobType',
        'lastUpdateTime' => 'LastUpdateTime',
        'maxDu' => 'MaxDu',
        'migrationMode' => 'MigrationMode',
        'minDu' => 'MinDu',
        'payType' => 'PayType',
        'requestId' => 'RequestId',
        'reserved' => 'Reserved',
        'resourceGroupDisplayName' => 'ResourceGroupDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
        'retryState' => 'RetryState',
        'sourceEndpoint' => 'SourceEndpoint',
        'status' => 'Status',
        'subDistributedJob' => 'SubDistributedJob',
        'subSyncJob' => 'SubSyncJob',
        'subscribeTopic' => 'SubscribeTopic',
        'subscriptionDataType' => 'SubscriptionDataType',
        'subscriptionHost' => 'SubscriptionHost',
        'success' => 'Success',
        'synchronizationDirection' => 'SynchronizationDirection',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (null !== $this->dataDeliveryChannelInfo) {
            $this->dataDeliveryChannelInfo->validate();
        }
        if (null !== $this->dataSynchronizationStatus) {
            $this->dataSynchronizationStatus->validate();
        }
        if (null !== $this->destinationEndpoint) {
            $this->destinationEndpoint->validate();
        }
        if (null !== $this->migrationMode) {
            $this->migrationMode->validate();
        }
        if (null !== $this->retryState) {
            $this->retryState->validate();
        }
        if (null !== $this->sourceEndpoint) {
            $this->sourceEndpoint->validate();
        }
        if (\is_array($this->subDistributedJob)) {
            Model::validateArray($this->subDistributedJob);
        }
        if (\is_array($this->subSyncJob)) {
            Model::validateArray($this->subSyncJob);
        }
        if (null !== $this->subscriptionDataType) {
            $this->subscriptionDataType->validate();
        }
        if (null !== $this->subscriptionHost) {
            $this->subscriptionHost->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DataDeliveryChannelInfo'] = null !== $this->dataDeliveryChannelInfo ? $this->dataDeliveryChannelInfo->toArray($noStream) : $this->dataDeliveryChannelInfo;
        }

        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toArray($noStream) : $this->dataSynchronizationStatus;
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
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toArray($noStream) : $this->destinationEndpoint;
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
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toArray($noStream) : $this->migrationMode;
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
            $res['RetryState'] = null !== $this->retryState ? $this->retryState->toArray($noStream) : $this->retryState;
        }

        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toArray($noStream) : $this->sourceEndpoint;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subDistributedJob) {
            if (\is_array($this->subDistributedJob)) {
                $res['SubDistributedJob'] = [];
                $n1 = 0;
                foreach ($this->subDistributedJob as $item1) {
                    $res['SubDistributedJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subSyncJob) {
            if (\is_array($this->subSyncJob)) {
                $res['SubSyncJob'] = [];
                $n1 = 0;
                foreach ($this->subSyncJob as $item1) {
                    $res['SubSyncJob'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subscribeTopic) {
            $res['SubscribeTopic'] = $this->subscribeTopic;
        }

        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toArray($noStream) : $this->subscriptionDataType;
        }

        if (null !== $this->subscriptionHost) {
            $res['SubscriptionHost'] = null !== $this->subscriptionHost ? $this->subscriptionHost->toArray($noStream) : $this->subscriptionHost;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SubDistributedJob'] as $item1) {
                    $model->subDistributedJob[$n1++] = subDistributedJob::fromMap($item1);
                }
            }
        }

        if (isset($map['SubSyncJob'])) {
            if (!empty($map['SubSyncJob'])) {
                $model->subSyncJob = [];
                $n1 = 0;
                foreach ($map['SubSyncJob'] as $item1) {
                    $model->subSyncJob[$n1++] = subSyncJob::fromMap($item1);
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
