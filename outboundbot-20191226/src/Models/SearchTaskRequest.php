<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SearchTaskRequest extends Model
{
    /**
     * @example 1646582400000
     *
     * @var int
     */
    public $actualTimeGte;

    /**
     * @example 1643126399000
     *
     * @var int
     */
    public $actualTimeLte;

    /**
     * @example 12341155
     *
     * @var int
     */
    public $callDurationGte;

    /**
     * @example 12341155
     *
     * @var int
     */
    public $callDurationLte;

    /**
     * @example 15126426342
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example d481cebe-0bb6-4d13-9649-42ce5074fb75
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3a30ae7c-27b2-4305-9444-7185ced9d51f
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupNameQuery;

    /**
     * @example 11994321-e6bc-47bb-8b1c-8eef8f2f768b
     *
     * @var string
     */
    public $jobId;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $jobStatusStringList;

    /**
     * @example AVD-2021-39685
     *
     * @var string
     */
    public $otherId;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordingDurationGte;

    /**
     * @example 60
     *
     * @var int
     */
    public $recordingDurationLte;

    /**
     * @var string
     */
    public $scriptNameQuery;

    /**
     * @example actualTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 1646792941
     *
     * @var int
     */
    public $taskCreateTimeGte;

    /**
     * @example 1646792941
     *
     * @var int
     */
    public $taskCreateTimeLte;

    /**
     * @example 744b27f3-437f-4a8c-a181-f668e492fd24
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $taskStatusStringList;

    /**
     * @example 12341155
     *
     * @var string
     */
    public $userIdMatch;
    protected $_name = [
        'actualTimeGte'        => 'ActualTimeGte',
        'actualTimeLte'        => 'ActualTimeLte',
        'callDurationGte'      => 'CallDurationGte',
        'callDurationLte'      => 'CallDurationLte',
        'calledNumber'         => 'CalledNumber',
        'instanceId'           => 'InstanceId',
        'jobGroupId'           => 'JobGroupId',
        'jobGroupNameQuery'    => 'JobGroupNameQuery',
        'jobId'                => 'JobId',
        'jobStatusStringList'  => 'JobStatusStringList',
        'otherId'              => 'OtherId',
        'pageIndex'            => 'PageIndex',
        'pageSize'             => 'PageSize',
        'recordingDurationGte' => 'RecordingDurationGte',
        'recordingDurationLte' => 'RecordingDurationLte',
        'scriptNameQuery'      => 'ScriptNameQuery',
        'sortBy'               => 'SortBy',
        'sortOrder'            => 'SortOrder',
        'taskCreateTimeGte'    => 'TaskCreateTimeGte',
        'taskCreateTimeLte'    => 'TaskCreateTimeLte',
        'taskId'               => 'TaskId',
        'taskStatusStringList' => 'TaskStatusStringList',
        'userIdMatch'          => 'UserIdMatch',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SearchTaskRequest
     */
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
