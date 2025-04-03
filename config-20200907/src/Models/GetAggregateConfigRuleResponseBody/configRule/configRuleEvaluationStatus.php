<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Dara\Model;

class configRuleEvaluationStatus extends Model
{
    /**
     * @var int
     */
    public $firstActivatedTimestamp;

    /**
     * @var bool
     */
    public $firstEvaluationStarted;

    /**
     * @var string
     */
    public $lastErrorCode;

    /**
     * @var string
     */
    public $lastErrorMessage;

    /**
     * @var int
     */
    public $lastFailedEvaluationTimestamp;

    /**
     * @var int
     */
    public $lastFailedInvocationTimestamp;

    /**
     * @var int
     */
    public $lastSuccessfulEvaluationTimestamp;

    /**
     * @var int
     */
    public $lastSuccessfulInvocationTimestamp;
    protected $_name = [
        'firstActivatedTimestamp' => 'FirstActivatedTimestamp',
        'firstEvaluationStarted' => 'FirstEvaluationStarted',
        'lastErrorCode' => 'LastErrorCode',
        'lastErrorMessage' => 'LastErrorMessage',
        'lastFailedEvaluationTimestamp' => 'LastFailedEvaluationTimestamp',
        'lastFailedInvocationTimestamp' => 'LastFailedInvocationTimestamp',
        'lastSuccessfulEvaluationTimestamp' => 'LastSuccessfulEvaluationTimestamp',
        'lastSuccessfulInvocationTimestamp' => 'LastSuccessfulInvocationTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstActivatedTimestamp) {
            $res['FirstActivatedTimestamp'] = $this->firstActivatedTimestamp;
        }

        if (null !== $this->firstEvaluationStarted) {
            $res['FirstEvaluationStarted'] = $this->firstEvaluationStarted;
        }

        if (null !== $this->lastErrorCode) {
            $res['LastErrorCode'] = $this->lastErrorCode;
        }

        if (null !== $this->lastErrorMessage) {
            $res['LastErrorMessage'] = $this->lastErrorMessage;
        }

        if (null !== $this->lastFailedEvaluationTimestamp) {
            $res['LastFailedEvaluationTimestamp'] = $this->lastFailedEvaluationTimestamp;
        }

        if (null !== $this->lastFailedInvocationTimestamp) {
            $res['LastFailedInvocationTimestamp'] = $this->lastFailedInvocationTimestamp;
        }

        if (null !== $this->lastSuccessfulEvaluationTimestamp) {
            $res['LastSuccessfulEvaluationTimestamp'] = $this->lastSuccessfulEvaluationTimestamp;
        }

        if (null !== $this->lastSuccessfulInvocationTimestamp) {
            $res['LastSuccessfulInvocationTimestamp'] = $this->lastSuccessfulInvocationTimestamp;
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
        if (isset($map['FirstActivatedTimestamp'])) {
            $model->firstActivatedTimestamp = $map['FirstActivatedTimestamp'];
        }

        if (isset($map['FirstEvaluationStarted'])) {
            $model->firstEvaluationStarted = $map['FirstEvaluationStarted'];
        }

        if (isset($map['LastErrorCode'])) {
            $model->lastErrorCode = $map['LastErrorCode'];
        }

        if (isset($map['LastErrorMessage'])) {
            $model->lastErrorMessage = $map['LastErrorMessage'];
        }

        if (isset($map['LastFailedEvaluationTimestamp'])) {
            $model->lastFailedEvaluationTimestamp = $map['LastFailedEvaluationTimestamp'];
        }

        if (isset($map['LastFailedInvocationTimestamp'])) {
            $model->lastFailedInvocationTimestamp = $map['LastFailedInvocationTimestamp'];
        }

        if (isset($map['LastSuccessfulEvaluationTimestamp'])) {
            $model->lastSuccessfulEvaluationTimestamp = $map['LastSuccessfulEvaluationTimestamp'];
        }

        if (isset($map['LastSuccessfulInvocationTimestamp'])) {
            $model->lastSuccessfulInvocationTimestamp = $map['LastSuccessfulInvocationTimestamp'];
        }

        return $model;
    }
}
