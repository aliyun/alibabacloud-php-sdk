<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationResponseBody\apmAppInfoList;

use AlibabaCloud\Tea\Model;

class apmAppInfo extends Model
{
    /**
     * @var int
     */
    public $allocatedMemory;

    /**
     * @var int
     */
    public $allocatedVcore;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var float
     */
    public $clusterUsagePercent;

    /**
     * @var string
     */
    public $diagnoseCode;

    /**
     * @var string
     */
    public $diagnoseResult;

    /**
     * @var string
     */
    public $diagnostics;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $finalStatus;

    /**
     * @var int
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $memorySeconds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $progress;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var float
     */
    public $queueUsagePercent;

    /**
     * @var string
     */
    public $resourceRequests;

    /**
     * @var int
     */
    public $runningContainers;

    /**
     * @var int
     */
    public $runningDuration;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $submitTime;

    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $vcoreSeconds;
    protected $_name = [
        'allocatedMemory'     => 'AllocatedMemory',
        'allocatedVcore'      => 'AllocatedVcore',
        'applicationId'       => 'ApplicationId',
        'applicationType'     => 'ApplicationType',
        'clusterBizId'        => 'ClusterBizId',
        'clusterUsagePercent' => 'ClusterUsagePercent',
        'diagnoseCode'        => 'DiagnoseCode',
        'diagnoseResult'      => 'DiagnoseResult',
        'diagnostics'         => 'Diagnostics',
        'duration'            => 'Duration',
        'finalStatus'         => 'FinalStatus',
        'finishedTime'        => 'FinishedTime',
        'memorySeconds'       => 'MemorySeconds',
        'name'                => 'Name',
        'progress'            => 'Progress',
        'queue'               => 'Queue',
        'queueUsagePercent'   => 'QueueUsagePercent',
        'resourceRequests'    => 'ResourceRequests',
        'runningContainers'   => 'RunningContainers',
        'runningDuration'     => 'RunningDuration',
        'startTime'           => 'StartTime',
        'state'               => 'State',
        'submitTime'          => 'SubmitTime',
        'user'                => 'User',
        'vcoreSeconds'        => 'VcoreSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocatedMemory) {
            $res['AllocatedMemory'] = $this->allocatedMemory;
        }
        if (null !== $this->allocatedVcore) {
            $res['AllocatedVcore'] = $this->allocatedVcore;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->clusterUsagePercent) {
            $res['ClusterUsagePercent'] = $this->clusterUsagePercent;
        }
        if (null !== $this->diagnoseCode) {
            $res['DiagnoseCode'] = $this->diagnoseCode;
        }
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = $this->diagnoseResult;
        }
        if (null !== $this->diagnostics) {
            $res['Diagnostics'] = $this->diagnostics;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->finalStatus) {
            $res['FinalStatus'] = $this->finalStatus;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->memorySeconds) {
            $res['MemorySeconds'] = $this->memorySeconds;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->queueUsagePercent) {
            $res['QueueUsagePercent'] = $this->queueUsagePercent;
        }
        if (null !== $this->resourceRequests) {
            $res['ResourceRequests'] = $this->resourceRequests;
        }
        if (null !== $this->runningContainers) {
            $res['RunningContainers'] = $this->runningContainers;
        }
        if (null !== $this->runningDuration) {
            $res['RunningDuration'] = $this->runningDuration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->vcoreSeconds) {
            $res['VcoreSeconds'] = $this->vcoreSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apmAppInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocatedMemory'])) {
            $model->allocatedMemory = $map['AllocatedMemory'];
        }
        if (isset($map['AllocatedVcore'])) {
            $model->allocatedVcore = $map['AllocatedVcore'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['ClusterUsagePercent'])) {
            $model->clusterUsagePercent = $map['ClusterUsagePercent'];
        }
        if (isset($map['DiagnoseCode'])) {
            $model->diagnoseCode = $map['DiagnoseCode'];
        }
        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = $map['DiagnoseResult'];
        }
        if (isset($map['Diagnostics'])) {
            $model->diagnostics = $map['Diagnostics'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FinalStatus'])) {
            $model->finalStatus = $map['FinalStatus'];
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['MemorySeconds'])) {
            $model->memorySeconds = $map['MemorySeconds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['QueueUsagePercent'])) {
            $model->queueUsagePercent = $map['QueueUsagePercent'];
        }
        if (isset($map['ResourceRequests'])) {
            $model->resourceRequests = $map['ResourceRequests'];
        }
        if (isset($map['RunningContainers'])) {
            $model->runningContainers = $map['RunningContainers'];
        }
        if (isset($map['RunningDuration'])) {
            $model->runningDuration = $map['RunningDuration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['VcoreSeconds'])) {
            $model->vcoreSeconds = $map['VcoreSeconds'];
        }

        return $model;
    }
}
