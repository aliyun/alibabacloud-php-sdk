<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subscriptionHost;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $databaseCount;

    /**
     * @var string
     */
    public $dbObject;

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
     * @var migrationMode
     */
    public $migrationMode;

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
        'appName'                  => 'AppName',
        'beginTimestamp'           => 'BeginTimestamp',
        'checkpoint'               => 'Checkpoint',
        'code'                     => 'Code',
        'consumptionCheckpoint'    => 'ConsumptionCheckpoint',
        'consumptionClient'        => 'ConsumptionClient',
        'createTime'               => 'CreateTime',
        'databaseCount'            => 'DatabaseCount',
        'dbObject'                 => 'DbObject',
        'delay'                    => 'Delay',
        'demoJob'                  => 'DemoJob',
        'destNetType'              => 'DestNetType',
        'destinationEndpoint'      => 'DestinationEndpoint',
        'dtsInstanceID'            => 'DtsInstanceID',
        'dtsJobClass'              => 'DtsJobClass',
        'dtsJobDirection'          => 'DtsJobDirection',
        'dtsJobId'                 => 'DtsJobId',
        'dtsJobName'               => 'DtsJobName',
        'dynamicMessage'           => 'DynamicMessage',
        'endTimestamp'             => 'EndTimestamp',
        'errCode'                  => 'ErrCode',
        'errMessage'               => 'ErrMessage',
        'errorMessage'             => 'ErrorMessage',
        'etlCalculator'            => 'EtlCalculator',
        'expireTime'               => 'ExpireTime',
        'finishTime'               => 'FinishTime',
        'groupId'                  => 'GroupId',
        'httpStatusCode'           => 'HttpStatusCode',
        'jobType'                  => 'JobType',
        'migrationMode'            => 'MigrationMode',
        'payType'                  => 'PayType',
        'requestId'                => 'RequestId',
        'reserved'                 => 'Reserved',
        'sourceEndpoint'           => 'SourceEndpoint',
        'status'                   => 'Status',
        'subDistributedJob'        => 'SubDistributedJob',
        'subSyncJob'               => 'SubSyncJob',
        'subscribeTopic'           => 'SubscribeTopic',
        'subscriptionDataType'     => 'SubscriptionDataType',
        'subscriptionHost'         => 'SubscriptionHost',
        'success'                  => 'Success',
        'synchronizationDirection' => 'SynchronizationDirection',
        'taskType'                 => 'TaskType',
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
        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }
        if (null !== $this->dbObject) {
            $res['DbObject'] = $this->dbObject;
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
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
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
        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }
        if (isset($map['DbObject'])) {
            $model->dbObject = $map['DbObject'];
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
        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
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
