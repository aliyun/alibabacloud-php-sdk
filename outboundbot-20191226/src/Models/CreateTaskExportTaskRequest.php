<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateTaskExportTaskRequest extends Model
{
    /**
     * @var int
     */
    public $actualTimeGte;

    /**
     * @var int
     */
    public $actualTimeLte;

    /**
     * @var int
     */
    public $callDurationGte;

    /**
     * @var int
     */
    public $callDurationLte;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var bool
     */
    public $hasAnswered;

    /**
     * @var bool
     */
    public $hasHangUpByRejection;

    /**
     * @var bool
     */
    public $hasReachedEndOfFlow;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupNameQuery;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobStatusStringList;

    /**
     * @var string
     */
    public $otherId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $recordingDurationGte;

    /**
     * @var int
     */
    public $recordingDurationLte;

    /**
     * @var string
     */
    public $scriptNameQuery;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var int
     */
    public $taskCreateTimeGte;

    /**
     * @var int
     */
    public $taskCreateTimeLte;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatusStringList;

    /**
     * @var string
     */
    public $userIdMatch;
    protected $_name = [
        'actualTimeGte' => 'ActualTimeGte',
        'actualTimeLte' => 'ActualTimeLte',
        'callDurationGte' => 'CallDurationGte',
        'callDurationLte' => 'CallDurationLte',
        'calledNumber' => 'CalledNumber',
        'hasAnswered' => 'HasAnswered',
        'hasHangUpByRejection' => 'HasHangUpByRejection',
        'hasReachedEndOfFlow' => 'HasReachedEndOfFlow',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobGroupNameQuery' => 'JobGroupNameQuery',
        'jobId' => 'JobId',
        'jobStatusStringList' => 'JobStatusStringList',
        'otherId' => 'OtherId',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'recordingDurationGte' => 'RecordingDurationGte',
        'recordingDurationLte' => 'RecordingDurationLte',
        'scriptNameQuery' => 'ScriptNameQuery',
        'sortBy' => 'SortBy',
        'sortOrder' => 'SortOrder',
        'taskCreateTimeGte' => 'TaskCreateTimeGte',
        'taskCreateTimeLte' => 'TaskCreateTimeLte',
        'taskId' => 'TaskId',
        'taskStatusStringList' => 'TaskStatusStringList',
        'userIdMatch' => 'UserIdMatch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTimeGte) {
            $res['ActualTimeGte'] = $this->actualTimeGte;
        }

        if (null !== $this->actualTimeLte) {
            $res['ActualTimeLte'] = $this->actualTimeLte;
        }

        if (null !== $this->callDurationGte) {
            $res['CallDurationGte'] = $this->callDurationGte;
        }

        if (null !== $this->callDurationLte) {
            $res['CallDurationLte'] = $this->callDurationLte;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->hasAnswered) {
            $res['HasAnswered'] = $this->hasAnswered;
        }

        if (null !== $this->hasHangUpByRejection) {
            $res['HasHangUpByRejection'] = $this->hasHangUpByRejection;
        }

        if (null !== $this->hasReachedEndOfFlow) {
            $res['HasReachedEndOfFlow'] = $this->hasReachedEndOfFlow;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobGroupNameQuery) {
            $res['JobGroupNameQuery'] = $this->jobGroupNameQuery;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->jobStatusStringList) {
            $res['JobStatusStringList'] = $this->jobStatusStringList;
        }

        if (null !== $this->otherId) {
            $res['OtherId'] = $this->otherId;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recordingDurationGte) {
            $res['RecordingDurationGte'] = $this->recordingDurationGte;
        }

        if (null !== $this->recordingDurationLte) {
            $res['RecordingDurationLte'] = $this->recordingDurationLte;
        }

        if (null !== $this->scriptNameQuery) {
            $res['ScriptNameQuery'] = $this->scriptNameQuery;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }

        if (null !== $this->taskCreateTimeGte) {
            $res['TaskCreateTimeGte'] = $this->taskCreateTimeGte;
        }

        if (null !== $this->taskCreateTimeLte) {
            $res['TaskCreateTimeLte'] = $this->taskCreateTimeLte;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatusStringList) {
            $res['TaskStatusStringList'] = $this->taskStatusStringList;
        }

        if (null !== $this->userIdMatch) {
            $res['UserIdMatch'] = $this->userIdMatch;
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
        if (isset($map['ActualTimeGte'])) {
            $model->actualTimeGte = $map['ActualTimeGte'];
        }

        if (isset($map['ActualTimeLte'])) {
            $model->actualTimeLte = $map['ActualTimeLte'];
        }

        if (isset($map['CallDurationGte'])) {
            $model->callDurationGte = $map['CallDurationGte'];
        }

        if (isset($map['CallDurationLte'])) {
            $model->callDurationLte = $map['CallDurationLte'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['HasAnswered'])) {
            $model->hasAnswered = $map['HasAnswered'];
        }

        if (isset($map['HasHangUpByRejection'])) {
            $model->hasHangUpByRejection = $map['HasHangUpByRejection'];
        }

        if (isset($map['HasReachedEndOfFlow'])) {
            $model->hasReachedEndOfFlow = $map['HasReachedEndOfFlow'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobGroupNameQuery'])) {
            $model->jobGroupNameQuery = $map['JobGroupNameQuery'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['JobStatusStringList'])) {
            $model->jobStatusStringList = $map['JobStatusStringList'];
        }

        if (isset($map['OtherId'])) {
            $model->otherId = $map['OtherId'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecordingDurationGte'])) {
            $model->recordingDurationGte = $map['RecordingDurationGte'];
        }

        if (isset($map['RecordingDurationLte'])) {
            $model->recordingDurationLte = $map['RecordingDurationLte'];
        }

        if (isset($map['ScriptNameQuery'])) {
            $model->scriptNameQuery = $map['ScriptNameQuery'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['TaskCreateTimeGte'])) {
            $model->taskCreateTimeGte = $map['TaskCreateTimeGte'];
        }

        if (isset($map['TaskCreateTimeLte'])) {
            $model->taskCreateTimeLte = $map['TaskCreateTimeLte'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatusStringList'])) {
            $model->taskStatusStringList = $map['TaskStatusStringList'];
        }

        if (isset($map['UserIdMatch'])) {
            $model->userIdMatch = $map['UserIdMatch'];
        }

        return $model;
    }
}
