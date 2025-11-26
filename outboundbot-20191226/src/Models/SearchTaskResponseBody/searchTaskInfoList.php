<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody\searchTaskInfoList\labels;

class searchTaskInfoList extends Model
{
    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var int
     */
    public $callDuration;

    /**
     * @var string
     */
    public $callDurationDisplay;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $dialException;

    /**
     * @var string[]
     */
    public $dialExceptionCodes;

    /**
     * @var string
     */
    public $dialExceptionOld;

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
    public $hasLastPlaybackCompleted;

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
    public $jobGroupName;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $jobStatusName;

    /**
     * @var string
     */
    public $jobStatusString;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var int
     */
    public $taskCreateTime;

    /**
     * @var int
     */
    public $taskEndReason;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskStatusName;

    /**
     * @var string
     */
    public $taskStatusString;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'actualTime' => 'ActualTime',
        'callDuration' => 'CallDuration',
        'callDurationDisplay' => 'CallDurationDisplay',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'dialException' => 'DialException',
        'dialExceptionCodes' => 'DialExceptionCodes',
        'dialExceptionOld' => 'DialExceptionOld',
        'hasAnswered' => 'HasAnswered',
        'hasHangUpByRejection' => 'HasHangUpByRejection',
        'hasLastPlaybackCompleted' => 'HasLastPlaybackCompleted',
        'hasReachedEndOfFlow' => 'HasReachedEndOfFlow',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobGroupName' => 'JobGroupName',
        'jobId' => 'JobId',
        'jobStatus' => 'JobStatus',
        'jobStatusName' => 'JobStatusName',
        'jobStatusString' => 'JobStatusString',
        'labels' => 'Labels',
        'recordingDuration' => 'RecordingDuration',
        'scriptName' => 'ScriptName',
        'taskCreateTime' => 'TaskCreateTime',
        'taskEndReason' => 'TaskEndReason',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'taskStatusName' => 'TaskStatusName',
        'taskStatusString' => 'TaskStatusString',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->dialExceptionCodes)) {
            Model::validateArray($this->dialExceptionCodes);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->dialException) {
            $res['DialException'] = $this->dialException;
        }

        if (null !== $this->dialExceptionCodes) {
            if (\is_array($this->dialExceptionCodes)) {
                $res['DialExceptionCodes'] = [];
                $n1 = 0;
                foreach ($this->dialExceptionCodes as $item1) {
                    $res['DialExceptionCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['DialException'])) {
            $model->dialException = $map['DialException'];
        }

        if (isset($map['DialExceptionCodes'])) {
            if (!empty($map['DialExceptionCodes'])) {
                $model->dialExceptionCodes = [];
                $n1 = 0;
                foreach ($map['DialExceptionCodes'] as $item1) {
                    $model->dialExceptionCodes[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
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
