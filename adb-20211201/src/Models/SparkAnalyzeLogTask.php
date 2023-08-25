<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SparkAnalyzeLogTask extends Model
{
    /**
     * @example amv-adbxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @var LogAnalyzeResult
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $ruleMatched;

    /**
     * @example 1672123543000
     *
     * @var int
     */
    public $startedTimeInMillis;

    /**
     * @example 1672123543000
     *
     * @var int
     */
    public $submittedTimeInMillis;

    /**
     * @example Driver log not found
     *
     * @var string
     */
    public $taskErrMsg;

    /**
     * @example 10
     *
     * @var int
     */
    public $taskId;

    /**
     * @example WAITING
     *
     * @var string
     */
    public $taskState;

    /**
     * @example 1672123543000
     *
     * @var int
     */
    public $terminatedTimeInMillis;

    /**
     * @example 13719918xxx
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return SparkAnalyzeLogTask
     */
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
