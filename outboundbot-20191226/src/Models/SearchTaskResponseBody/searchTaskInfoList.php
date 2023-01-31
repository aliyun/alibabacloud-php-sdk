<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class searchTaskInfoList extends Model
{
    /**
     * @example 1643436089677
     *
     * @var int
     */
    public $actualTime;

    /**
     * @example 1646792941
     *
     * @var int
     */
    public $callDuration;

    /**
     * @example ActualTime
     *
     * @var string
     */
    public $callDurationDisplay;

    /**
     * @example 15205879599
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example [{"code":"OutboundCallError.SipCodeError", "params":[{"key":"SipCode","value":"500"}]}]
     *
     * @var string
     */
    public $dialException;

    /**
     * @var string[]
     */
    public $dialExceptionCodes;

    /**
     * @example ["OutboundCallError.SipTrunkError"]
     *
     * @var string
     */
    public $dialExceptionOld;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasAnswered;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasHangUpByRejection;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasLastPlaybackCompleted;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasReachedEndOfFlow;

    /**
     * @example 73df6283-26b2-402d-bad0-ffa489923ea1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 37db3113-ad34-4ba3-b930-468f016bbf95
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @example 6203248e-e652-4ef8-a1eb-586ed7b54dc2
     *
     * @var string
     */
    public $jobId;

    /**
     * @example Succeeded
     *
     * @var int
     */
    public $jobStatus;

    /**
     * @example xxx
     *
     * @var string
     */
    public $jobStatusName;

    /**
     * @example Scheduling
     *
     * @var string
     */
    public $jobStatusString;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example 1646792941
     *
     * @var int
     */
    public $taskCreateTime;

    /**
     * @example OutOfService
     *
     * @var int
     */
    public $taskEndReason;

    /**
     * @example 479aea04-3a92-4ac3-935d-c8798c667850
     *
     * @var string
     */
    public $taskId;

    /**
     * @example Success
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $taskStatusName;

    /**
     * @example Executing
     *
     * @var string
     */
    public $taskStatusString;

    /**
     * @example 12334134
     *
     * @var string
     */
    public $userId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'actualTime'               => 'ActualTime',
        'callDuration'             => 'CallDuration',
        'callDurationDisplay'      => 'CallDurationDisplay',
        'calledNumber'             => 'CalledNumber',
        'dialException'            => 'DialException',
        'dialExceptionCodes'       => 'DialExceptionCodes',
        'dialExceptionOld'         => 'DialExceptionOld',
        'hasAnswered'              => 'HasAnswered',
        'hasHangUpByRejection'     => 'HasHangUpByRejection',
        'hasLastPlaybackCompleted' => 'HasLastPlaybackCompleted',
        'hasReachedEndOfFlow'      => 'HasReachedEndOfFlow',
        'instanceId'               => 'InstanceId',
        'jobGroupId'               => 'JobGroupId',
        'jobGroupName'             => 'JobGroupName',
        'jobId'                    => 'JobId',
        'jobStatus'                => 'JobStatus',
        'jobStatusName'            => 'JobStatusName',
        'jobStatusString'          => 'JobStatusString',
        'recordingDuration'        => 'RecordingDuration',
        'scriptName'               => 'ScriptName',
        'taskCreateTime'           => 'TaskCreateTime',
        'taskEndReason'            => 'TaskEndReason',
        'taskId'                   => 'TaskId',
        'taskStatus'               => 'TaskStatus',
        'taskStatusName'           => 'TaskStatusName',
        'taskStatusString'         => 'TaskStatusString',
        'userId'                   => 'UserId',
        'userName'                 => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->callDurationDisplay) {
            $res['CallDurationDisplay'] = $this->callDurationDisplay;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->dialException) {
            $res['DialException'] = $this->dialException;
        }
        if (null !== $this->dialExceptionCodes) {
            $res['DialExceptionCodes'] = $this->dialExceptionCodes;
        }
        if (null !== $this->dialExceptionOld) {
            $res['DialExceptionOld'] = $this->dialExceptionOld;
        }
        if (null !== $this->hasAnswered) {
            $res['HasAnswered'] = $this->hasAnswered;
        }
        if (null !== $this->hasHangUpByRejection) {
            $res['HasHangUpByRejection'] = $this->hasHangUpByRejection;
        }
        if (null !== $this->hasLastPlaybackCompleted) {
            $res['HasLastPlaybackCompleted'] = $this->hasLastPlaybackCompleted;
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
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->jobStatusName) {
            $res['JobStatusName'] = $this->jobStatusName;
        }
        if (null !== $this->jobStatusString) {
            $res['JobStatusString'] = $this->jobStatusString;
        }
        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->taskCreateTime) {
            $res['TaskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->taskEndReason) {
            $res['TaskEndReason'] = $this->taskEndReason;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskStatusName) {
            $res['TaskStatusName'] = $this->taskStatusName;
        }
        if (null !== $this->taskStatusString) {
            $res['TaskStatusString'] = $this->taskStatusString;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchTaskInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualTime'])) {
            $model->actualTime = $map['ActualTime'];
        }
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['CallDurationDisplay'])) {
            $model->callDurationDisplay = $map['CallDurationDisplay'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['DialException'])) {
            $model->dialException = $map['DialException'];
        }
        if (isset($map['DialExceptionCodes'])) {
            if (!empty($map['DialExceptionCodes'])) {
                $model->dialExceptionCodes = $map['DialExceptionCodes'];
            }
        }
        if (isset($map['DialExceptionOld'])) {
            $model->dialExceptionOld = $map['DialExceptionOld'];
        }
        if (isset($map['HasAnswered'])) {
            $model->hasAnswered = $map['HasAnswered'];
        }
        if (isset($map['HasHangUpByRejection'])) {
            $model->hasHangUpByRejection = $map['HasHangUpByRejection'];
        }
        if (isset($map['HasLastPlaybackCompleted'])) {
            $model->hasLastPlaybackCompleted = $map['HasLastPlaybackCompleted'];
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
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['JobStatusName'])) {
            $model->jobStatusName = $map['JobStatusName'];
        }
        if (isset($map['JobStatusString'])) {
            $model->jobStatusString = $map['JobStatusString'];
        }
        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['TaskCreateTime'])) {
            $model->taskCreateTime = $map['TaskCreateTime'];
        }
        if (isset($map['TaskEndReason'])) {
            $model->taskEndReason = $map['TaskEndReason'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskStatusName'])) {
            $model->taskStatusName = $map['TaskStatusName'];
        }
        if (isset($map['TaskStatusString'])) {
            $model->taskStatusString = $map['TaskStatusString'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
