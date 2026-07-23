<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentAccuracyTestResultsResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $accuracyTestTaskId;

    /**
     * @var string
     */
    public $agentResult;

    /**
     * @var string
     */
    public $agentSql;

    /**
     * @var string
     */
    public $answerResult;

    /**
     * @var string
     */
    public $answerSql;

    /**
     * @var bool
     */
    public $isTrue;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $recommendation;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $subtaskId;
    protected $_name = [
        'accuracyTestTaskId' => 'AccuracyTestTaskId',
        'agentResult' => 'AgentResult',
        'agentSql' => 'AgentSql',
        'answerResult' => 'AnswerResult',
        'answerSql' => 'AnswerSql',
        'isTrue' => 'IsTrue',
        'question' => 'Question',
        'reason' => 'Reason',
        'recommendation' => 'Recommendation',
        'resultId' => 'ResultId',
        'sessionId' => 'SessionId',
        'subtaskId' => 'SubtaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyTestTaskId) {
            $res['AccuracyTestTaskId'] = $this->accuracyTestTaskId;
        }

        if (null !== $this->agentResult) {
            $res['AgentResult'] = $this->agentResult;
        }

        if (null !== $this->agentSql) {
            $res['AgentSql'] = $this->agentSql;
        }

        if (null !== $this->answerResult) {
            $res['AnswerResult'] = $this->answerResult;
        }

        if (null !== $this->answerSql) {
            $res['AnswerSql'] = $this->answerSql;
        }

        if (null !== $this->isTrue) {
            $res['IsTrue'] = $this->isTrue;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->recommendation) {
            $res['Recommendation'] = $this->recommendation;
        }

        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->subtaskId) {
            $res['SubtaskId'] = $this->subtaskId;
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
        if (isset($map['AccuracyTestTaskId'])) {
            $model->accuracyTestTaskId = $map['AccuracyTestTaskId'];
        }

        if (isset($map['AgentResult'])) {
            $model->agentResult = $map['AgentResult'];
        }

        if (isset($map['AgentSql'])) {
            $model->agentSql = $map['AgentSql'];
        }

        if (isset($map['AnswerResult'])) {
            $model->answerResult = $map['AnswerResult'];
        }

        if (isset($map['AnswerSql'])) {
            $model->answerSql = $map['AnswerSql'];
        }

        if (isset($map['IsTrue'])) {
            $model->isTrue = $map['IsTrue'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Recommendation'])) {
            $model->recommendation = $map['Recommendation'];
        }

        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SubtaskId'])) {
            $model->subtaskId = $map['SubtaskId'];
        }

        return $model;
    }
}
