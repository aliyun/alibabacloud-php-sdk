<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiCallTaskPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $callingCount;

    /**
     * @var string
     */
    public $completeRate;

    /**
     * @var int
     */
    public $concurrentCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $dayCallCount;

    /**
     * @var string
     */
    public $dayConnectRate;

    /**
     * @var int
     */
    public $dayImportCount;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var string
     */
    public $historyConnectRate;

    /**
     * @var int
     */
    public $realStartTime;

    /**
     * @var string
     */
    public $startFailedReason;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $succeedCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalCallCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'applicationCode' => 'ApplicationCode',
        'applicationName' => 'ApplicationName',
        'callingCount' => 'CallingCount',
        'completeRate' => 'CompleteRate',
        'concurrentCount' => 'ConcurrentCount',
        'createTime' => 'CreateTime',
        'dayCallCount' => 'DayCallCount',
        'dayConnectRate' => 'DayConnectRate',
        'dayImportCount' => 'DayImportCount',
        'failedCount' => 'FailedCount',
        'historyConnectRate' => 'HistoryConnectRate',
        'realStartTime' => 'RealStartTime',
        'startFailedReason' => 'StartFailedReason',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'succeedCount' => 'SucceedCount',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'totalCallCount' => 'TotalCallCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->callingCount) {
            $res['CallingCount'] = $this->callingCount;
        }

        if (null !== $this->completeRate) {
            $res['CompleteRate'] = $this->completeRate;
        }

        if (null !== $this->concurrentCount) {
            $res['ConcurrentCount'] = $this->concurrentCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dayCallCount) {
            $res['DayCallCount'] = $this->dayCallCount;
        }

        if (null !== $this->dayConnectRate) {
            $res['DayConnectRate'] = $this->dayConnectRate;
        }

        if (null !== $this->dayImportCount) {
            $res['DayImportCount'] = $this->dayImportCount;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->historyConnectRate) {
            $res['HistoryConnectRate'] = $this->historyConnectRate;
        }

        if (null !== $this->realStartTime) {
            $res['RealStartTime'] = $this->realStartTime;
        }

        if (null !== $this->startFailedReason) {
            $res['StartFailedReason'] = $this->startFailedReason;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->succeedCount) {
            $res['SucceedCount'] = $this->succeedCount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalCallCount) {
            $res['TotalCallCount'] = $this->totalCallCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CallingCount'])) {
            $model->callingCount = $map['CallingCount'];
        }

        if (isset($map['CompleteRate'])) {
            $model->completeRate = $map['CompleteRate'];
        }

        if (isset($map['ConcurrentCount'])) {
            $model->concurrentCount = $map['ConcurrentCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DayCallCount'])) {
            $model->dayCallCount = $map['DayCallCount'];
        }

        if (isset($map['DayConnectRate'])) {
            $model->dayConnectRate = $map['DayConnectRate'];
        }

        if (isset($map['DayImportCount'])) {
            $model->dayImportCount = $map['DayImportCount'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['HistoryConnectRate'])) {
            $model->historyConnectRate = $map['HistoryConnectRate'];
        }

        if (isset($map['RealStartTime'])) {
            $model->realStartTime = $map['RealStartTime'];
        }

        if (isset($map['StartFailedReason'])) {
            $model->startFailedReason = $map['StartFailedReason'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SucceedCount'])) {
            $model->succeedCount = $map['SucceedCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalCallCount'])) {
            $model->totalCallCount = $map['TotalCallCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
