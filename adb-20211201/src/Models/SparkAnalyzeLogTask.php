<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class SparkAnalyzeLogTask extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var LogAnalyzeResult
     */
    public $result;
    /**
     * @var bool
     */
    public $ruleMatched;
    /**
     * @var int
     */
    public $startedTimeInMillis;
    /**
     * @var int
     */
    public $submittedTimeInMillis;
    /**
     * @var string
     */
    public $taskErrMsg;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskState;
    /**
     * @var int
     */
    public $terminatedTimeInMillis;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'DBClusterId'            => 'DBClusterId',
        'result'                 => 'Result',
        'ruleMatched'            => 'RuleMatched',
        'startedTimeInMillis'    => 'StartedTimeInMillis',
        'submittedTimeInMillis'  => 'SubmittedTimeInMillis',
        'taskErrMsg'             => 'TaskErrMsg',
        'taskId'                 => 'TaskId',
        'taskState'              => 'TaskState',
        'terminatedTimeInMillis' => 'TerminatedTimeInMillis',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->ruleMatched) {
            $res['RuleMatched'] = $this->ruleMatched;
        }

        if (null !== $this->startedTimeInMillis) {
            $res['StartedTimeInMillis'] = $this->startedTimeInMillis;
        }

        if (null !== $this->submittedTimeInMillis) {
            $res['SubmittedTimeInMillis'] = $this->submittedTimeInMillis;
        }

        if (null !== $this->taskErrMsg) {
            $res['TaskErrMsg'] = $this->taskErrMsg;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }

        if (null !== $this->terminatedTimeInMillis) {
            $res['TerminatedTimeInMillis'] = $this->terminatedTimeInMillis;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Result'])) {
            $model->result = LogAnalyzeResult::fromMap($map['Result']);
        }

        if (isset($map['RuleMatched'])) {
            $model->ruleMatched = $map['RuleMatched'];
        }

        if (isset($map['StartedTimeInMillis'])) {
            $model->startedTimeInMillis = $map['StartedTimeInMillis'];
        }

        if (isset($map['SubmittedTimeInMillis'])) {
            $model->submittedTimeInMillis = $map['SubmittedTimeInMillis'];
        }

        if (isset($map['TaskErrMsg'])) {
            $model->taskErrMsg = $map['TaskErrMsg'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        if (isset($map['TerminatedTimeInMillis'])) {
            $model->terminatedTimeInMillis = $map['TerminatedTimeInMillis'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
