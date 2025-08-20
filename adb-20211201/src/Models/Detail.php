<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class Detail extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $durationInMillis;

    /**
     * @var int
     */
    public $estimateExecutionCpuTimeInSeconds;

    /**
     * @var int
     */
    public $executionDurationInMillis;

    /**
     * @var string
     */
    public $lastAttemptId;

    /**
     * @var int
     */
    public $lastUpdatedTimeInMillis;

    /**
     * @var string
     */
    public $logRootPath;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var int
     */
    public $resourceProvisioningDurationInMillis;

    /**
     * @var int
     */
    public $runningStartTimeInMillis;

    /**
     * @var int
     */
    public $startedTimeInMillis;

    /**
     * @var int
     */
    public $submittedTimeInMillis;

    /**
     * @var int
     */
    public $terminatedTimeInMillis;

    /**
     * @var string
     */
    public $webUiAddress;
    protected $_name = [
        'appType' => 'AppType',
        'DBClusterId' => 'DBClusterId',
        'data' => 'Data',
        'durationInMillis' => 'DurationInMillis',
        'estimateExecutionCpuTimeInSeconds' => 'EstimateExecutionCpuTimeInSeconds',
        'executionDurationInMillis' => 'ExecutionDurationInMillis',
        'lastAttemptId' => 'LastAttemptId',
        'lastUpdatedTimeInMillis' => 'LastUpdatedTimeInMillis',
        'logRootPath' => 'LogRootPath',
        'resourceGroupName' => 'ResourceGroupName',
        'resourceProvisioningDurationInMillis' => 'ResourceProvisioningDurationInMillis',
        'runningStartTimeInMillis' => 'RunningStartTimeInMillis',
        'startedTimeInMillis' => 'StartedTimeInMillis',
        'submittedTimeInMillis' => 'SubmittedTimeInMillis',
        'terminatedTimeInMillis' => 'TerminatedTimeInMillis',
        'webUiAddress' => 'WebUiAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->durationInMillis) {
            $res['DurationInMillis'] = $this->durationInMillis;
        }

        if (null !== $this->estimateExecutionCpuTimeInSeconds) {
            $res['EstimateExecutionCpuTimeInSeconds'] = $this->estimateExecutionCpuTimeInSeconds;
        }

        if (null !== $this->executionDurationInMillis) {
            $res['ExecutionDurationInMillis'] = $this->executionDurationInMillis;
        }

        if (null !== $this->lastAttemptId) {
            $res['LastAttemptId'] = $this->lastAttemptId;
        }

        if (null !== $this->lastUpdatedTimeInMillis) {
            $res['LastUpdatedTimeInMillis'] = $this->lastUpdatedTimeInMillis;
        }

        if (null !== $this->logRootPath) {
            $res['LogRootPath'] = $this->logRootPath;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->resourceProvisioningDurationInMillis) {
            $res['ResourceProvisioningDurationInMillis'] = $this->resourceProvisioningDurationInMillis;
        }

        if (null !== $this->runningStartTimeInMillis) {
            $res['RunningStartTimeInMillis'] = $this->runningStartTimeInMillis;
        }

        if (null !== $this->startedTimeInMillis) {
            $res['StartedTimeInMillis'] = $this->startedTimeInMillis;
        }

        if (null !== $this->submittedTimeInMillis) {
            $res['SubmittedTimeInMillis'] = $this->submittedTimeInMillis;
        }

        if (null !== $this->terminatedTimeInMillis) {
            $res['TerminatedTimeInMillis'] = $this->terminatedTimeInMillis;
        }

        if (null !== $this->webUiAddress) {
            $res['WebUiAddress'] = $this->webUiAddress;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['DurationInMillis'])) {
            $model->durationInMillis = $map['DurationInMillis'];
        }

        if (isset($map['EstimateExecutionCpuTimeInSeconds'])) {
            $model->estimateExecutionCpuTimeInSeconds = $map['EstimateExecutionCpuTimeInSeconds'];
        }

        if (isset($map['ExecutionDurationInMillis'])) {
            $model->executionDurationInMillis = $map['ExecutionDurationInMillis'];
        }

        if (isset($map['LastAttemptId'])) {
            $model->lastAttemptId = $map['LastAttemptId'];
        }

        if (isset($map['LastUpdatedTimeInMillis'])) {
            $model->lastUpdatedTimeInMillis = $map['LastUpdatedTimeInMillis'];
        }

        if (isset($map['LogRootPath'])) {
            $model->logRootPath = $map['LogRootPath'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['ResourceProvisioningDurationInMillis'])) {
            $model->resourceProvisioningDurationInMillis = $map['ResourceProvisioningDurationInMillis'];
        }

        if (isset($map['RunningStartTimeInMillis'])) {
            $model->runningStartTimeInMillis = $map['RunningStartTimeInMillis'];
        }

        if (isset($map['StartedTimeInMillis'])) {
            $model->startedTimeInMillis = $map['StartedTimeInMillis'];
        }

        if (isset($map['SubmittedTimeInMillis'])) {
            $model->submittedTimeInMillis = $map['SubmittedTimeInMillis'];
        }

        if (isset($map['TerminatedTimeInMillis'])) {
            $model->terminatedTimeInMillis = $map['TerminatedTimeInMillis'];
        }

        if (isset($map['WebUiAddress'])) {
            $model->webUiAddress = $map['WebUiAddress'];
        }

        return $model;
    }
}
