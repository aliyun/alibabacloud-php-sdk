<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListJobExecutorsResponseBody;

use AlibabaCloud\Dara\Model;

class exexutors extends Model
{
    /**
     * @var int
     */
    public $activeTasks;

    /**
     * @var int
     */
    public $addTime;

    /**
     * @var int
     */
    public $completedTasks;

    /**
     * @var int
     */
    public $diskUsed;

    /**
     * @var string
     */
    public $executorId;

    /**
     * @var string
     */
    public $executorType;

    /**
     * @var int
     */
    public $failedTasks;

    /**
     * @var string
     */
    public $hostPort;

    /**
     * @var string
     */
    public $jobRunId;

    /**
     * @var int
     */
    public $maxMemory;

    /**
     * @var int
     */
    public $memoryUsed;

    /**
     * @var int
     */
    public $rddBlocks;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCores;

    /**
     * @var int
     */
    public $totalDuration;

    /**
     * @var int
     */
    public $totalGCTime;

    /**
     * @var int
     */
    public $totalInputBytes;

    /**
     * @var int
     */
    public $totalShuffleRead;

    /**
     * @var int
     */
    public $totalShuffleWrite;

    /**
     * @var int
     */
    public $totalTasks;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'activeTasks' => 'activeTasks',
        'addTime' => 'addTime',
        'completedTasks' => 'completedTasks',
        'diskUsed' => 'diskUsed',
        'executorId' => 'executorId',
        'executorType' => 'executorType',
        'failedTasks' => 'failedTasks',
        'hostPort' => 'hostPort',
        'jobRunId' => 'jobRunId',
        'maxMemory' => 'maxMemory',
        'memoryUsed' => 'memoryUsed',
        'rddBlocks' => 'rddBlocks',
        'status' => 'status',
        'totalCores' => 'totalCores',
        'totalDuration' => 'totalDuration',
        'totalGCTime' => 'totalGCTime',
        'totalInputBytes' => 'totalInputBytes',
        'totalShuffleRead' => 'totalShuffleRead',
        'totalShuffleWrite' => 'totalShuffleWrite',
        'totalTasks' => 'totalTasks',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeTasks) {
            $res['activeTasks'] = $this->activeTasks;
        }

        if (null !== $this->addTime) {
            $res['addTime'] = $this->addTime;
        }

        if (null !== $this->completedTasks) {
            $res['completedTasks'] = $this->completedTasks;
        }

        if (null !== $this->diskUsed) {
            $res['diskUsed'] = $this->diskUsed;
        }

        if (null !== $this->executorId) {
            $res['executorId'] = $this->executorId;
        }

        if (null !== $this->executorType) {
            $res['executorType'] = $this->executorType;
        }

        if (null !== $this->failedTasks) {
            $res['failedTasks'] = $this->failedTasks;
        }

        if (null !== $this->hostPort) {
            $res['hostPort'] = $this->hostPort;
        }

        if (null !== $this->jobRunId) {
            $res['jobRunId'] = $this->jobRunId;
        }

        if (null !== $this->maxMemory) {
            $res['maxMemory'] = $this->maxMemory;
        }

        if (null !== $this->memoryUsed) {
            $res['memoryUsed'] = $this->memoryUsed;
        }

        if (null !== $this->rddBlocks) {
            $res['rddBlocks'] = $this->rddBlocks;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->totalCores) {
            $res['totalCores'] = $this->totalCores;
        }

        if (null !== $this->totalDuration) {
            $res['totalDuration'] = $this->totalDuration;
        }

        if (null !== $this->totalGCTime) {
            $res['totalGCTime'] = $this->totalGCTime;
        }

        if (null !== $this->totalInputBytes) {
            $res['totalInputBytes'] = $this->totalInputBytes;
        }

        if (null !== $this->totalShuffleRead) {
            $res['totalShuffleRead'] = $this->totalShuffleRead;
        }

        if (null !== $this->totalShuffleWrite) {
            $res['totalShuffleWrite'] = $this->totalShuffleWrite;
        }

        if (null !== $this->totalTasks) {
            $res['totalTasks'] = $this->totalTasks;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['activeTasks'])) {
            $model->activeTasks = $map['activeTasks'];
        }

        if (isset($map['addTime'])) {
            $model->addTime = $map['addTime'];
        }

        if (isset($map['completedTasks'])) {
            $model->completedTasks = $map['completedTasks'];
        }

        if (isset($map['diskUsed'])) {
            $model->diskUsed = $map['diskUsed'];
        }

        if (isset($map['executorId'])) {
            $model->executorId = $map['executorId'];
        }

        if (isset($map['executorType'])) {
            $model->executorType = $map['executorType'];
        }

        if (isset($map['failedTasks'])) {
            $model->failedTasks = $map['failedTasks'];
        }

        if (isset($map['hostPort'])) {
            $model->hostPort = $map['hostPort'];
        }

        if (isset($map['jobRunId'])) {
            $model->jobRunId = $map['jobRunId'];
        }

        if (isset($map['maxMemory'])) {
            $model->maxMemory = $map['maxMemory'];
        }

        if (isset($map['memoryUsed'])) {
            $model->memoryUsed = $map['memoryUsed'];
        }

        if (isset($map['rddBlocks'])) {
            $model->rddBlocks = $map['rddBlocks'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['totalCores'])) {
            $model->totalCores = $map['totalCores'];
        }

        if (isset($map['totalDuration'])) {
            $model->totalDuration = $map['totalDuration'];
        }

        if (isset($map['totalGCTime'])) {
            $model->totalGCTime = $map['totalGCTime'];
        }

        if (isset($map['totalInputBytes'])) {
            $model->totalInputBytes = $map['totalInputBytes'];
        }

        if (isset($map['totalShuffleRead'])) {
            $model->totalShuffleRead = $map['totalShuffleRead'];
        }

        if (isset($map['totalShuffleWrite'])) {
            $model->totalShuffleWrite = $map['totalShuffleWrite'];
        }

        if (isset($map['totalTasks'])) {
            $model->totalTasks = $map['totalTasks'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
