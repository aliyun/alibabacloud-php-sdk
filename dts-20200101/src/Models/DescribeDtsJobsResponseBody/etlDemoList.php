<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\dataEtlStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\performance;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\retryState;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\structureInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\tagList;

class etlDemoList extends Model
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
    public $checkpoint;

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
     * @var dataEtlStatus
     */
    public $dataEtlStatus;

    /**
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

    /**
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @var string
     */
    public $dbObject;

    /**
     * @var int
     */
    public $delay;

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
    public $endTimestamp;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $etlSafeCheckpoint;

    /**
     * @var string
     */
    public $expireTime;

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
    public $originType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var performance
     */
    public $performance;

    /**
     * @var precheckStatus
     */
    public $precheckStatus;

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
     * @var reverseJob
     */
    public $reverseJob;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var string
     */
    public $status;

    /**
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'appName' => 'AppName',
        'beginTimestamp' => 'BeginTimestamp',
        'checkpoint' => 'Checkpoint',
        'consumptionCheckpoint' => 'ConsumptionCheckpoint',
        'consumptionClient' => 'ConsumptionClient',
        'createTime' => 'CreateTime',
        'dataEtlStatus' => 'DataEtlStatus',
        'dataInitializationStatus' => 'DataInitializationStatus',
        'dataSynchronizationStatus' => 'DataSynchronizationStatus',
        'dbObject' => 'DbObject',
        'delay' => 'Delay',
        'destinationEndpoint' => 'DestinationEndpoint',
        'dtsInstanceID' => 'DtsInstanceID',
        'dtsJobClass' => 'DtsJobClass',
        'dtsJobDirection' => 'DtsJobDirection',
        'dtsJobId' => 'DtsJobId',
        'dtsJobName' => 'DtsJobName',
        'endTimestamp' => 'EndTimestamp',
        'errorMessage' => 'ErrorMessage',
        'etlSafeCheckpoint' => 'EtlSafeCheckpoint',
        'expireTime' => 'ExpireTime',
        'jobType' => 'JobType',
        'migrationMode' => 'MigrationMode',
        'originType' => 'OriginType',
        'payType' => 'PayType',
        'performance' => 'Performance',
        'precheckStatus' => 'PrecheckStatus',
        'reserved' => 'Reserved',
        'resourceGroupDisplayName' => 'ResourceGroupDisplayName',
        'resourceGroupId' => 'ResourceGroupId',
        'retryState' => 'RetryState',
        'reverseJob' => 'ReverseJob',
        'sourceEndpoint' => 'SourceEndpoint',
        'status' => 'Status',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'tagList' => 'TagList',
    ];

    public function validate()
    {
        if (null !== $this->dataEtlStatus) {
            $this->dataEtlStatus->validate();
        }
        if (null !== $this->dataInitializationStatus) {
            $this->dataInitializationStatus->validate();
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
        if (null !== $this->performance) {
            $this->performance->validate();
        }
        if (null !== $this->precheckStatus) {
            $this->precheckStatus->validate();
        }
        if (null !== $this->retryState) {
            $this->retryState->validate();
        }
        if (null !== $this->reverseJob) {
            $this->reverseJob->validate();
        }
        if (null !== $this->sourceEndpoint) {
            $this->sourceEndpoint->validate();
        }
        if (null !== $this->structureInitializationStatus) {
            $this->structureInitializationStatus->validate();
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
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
            $res['DataEtlStatus'] = null !== $this->dataEtlStatus ? $this->dataEtlStatus->toArray($noStream) : $this->dataEtlStatus;
        }

        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toArray($noStream) : $this->dataInitializationStatus;
        }

        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toArray($noStream) : $this->dataSynchronizationStatus;
        }

        if (null !== $this->dbObject) {
            $res['DbObject'] = $this->dbObject;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toArray($noStream) : $this->destinationEndpoint;
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

        if (null !== $this->etlSafeCheckpoint) {
            $res['EtlSafeCheckpoint'] = $this->etlSafeCheckpoint;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toArray($noStream) : $this->migrationMode;
        }

        if (null !== $this->originType) {
            $res['OriginType'] = $this->originType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toArray($noStream) : $this->performance;
        }

        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toArray($noStream) : $this->precheckStatus;
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

        if (null !== $this->reverseJob) {
            $res['ReverseJob'] = null !== $this->reverseJob ? $this->reverseJob->toArray($noStream) : $this->reverseJob;
        }

        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toArray($noStream) : $this->sourceEndpoint;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toArray($noStream) : $this->structureInitializationStatus;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DbObject'])) {
            $model->dbObject = $map['DbObject'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
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

        if (isset($map['EtlSafeCheckpoint'])) {
            $model->etlSafeCheckpoint = $map['EtlSafeCheckpoint'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
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

        if (isset($map['ResourceGroupDisplayName'])) {
            $model->resourceGroupDisplayName = $map['ResourceGroupDisplayName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = tagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
