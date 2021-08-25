<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleResponseBody\configRule;

use AlibabaCloud\Tea\Model;

class configRuleEvaluationStatus extends Model
{
    /**
     * @var string
     */
    public $lastErrorCode;

    /**
     * @var int
     */
    public $lastSuccessfulEvaluationTimestamp;

    /**
     * @var int
     */
    public $firstActivatedTimestamp;

    /**
     * @var bool
     */
    public $firstEvaluationStarted;

    /**
     * @var int
     */
    public $lastSuccessfulInvocationTimestamp;

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
    protected $_name = [
        'lastErrorCode'                     => 'LastErrorCode',
        'lastSuccessfulEvaluationTimestamp' => 'LastSuccessfulEvaluationTimestamp',
        'firstActivatedTimestamp'           => 'FirstActivatedTimestamp',
        'firstEvaluationStarted'            => 'FirstEvaluationStarted',
        'lastSuccessfulInvocationTimestamp' => 'LastSuccessfulInvocationTimestamp',
        'lastErrorMessage'                  => 'LastErrorMessage',
        'lastFailedEvaluationTimestamp'     => 'LastFailedEvaluationTimestamp',
        'lastFailedInvocationTimestamp'     => 'LastFailedInvocationTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastErrorCode) {
            $res['LastErrorCode'] = $this->lastErrorCode;
        }
        if (null !== $this->lastSuccessfulEvaluationTimestamp) {
            $res['LastSuccessfulEvaluationTimestamp'] = $this->lastSuccessfulEvaluationTimestamp;
        }
        if (null !== $this->firstActivatedTimestamp) {
            $res['FirstActivatedTimestamp'] = $this->firstActivatedTimestamp;
        }
        if (null !== $this->firstEvaluationStarted) {
            $res['FirstEvaluationStarted'] = $this->firstEvaluationStarted;
        }
        if (null !== $this->lastSuccessfulInvocationTimestamp) {
            $res['LastSuccessfulInvocationTimestamp'] = $this->lastSuccessfulInvocationTimestamp;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configRuleEvaluationStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastErrorCode'])) {
            $model->lastErrorCode = $map['LastErrorCode'];
        }
        if (isset($map['LastSuccessfulEvaluationTimestamp'])) {
            $model->lastSuccessfulEvaluationTimestamp = $map['LastSuccessfulEvaluationTimestamp'];
        }
        if (isset($map['FirstActivatedTimestamp'])) {
            $model->firstActivatedTimestamp = $map['FirstActivatedTimestamp'];
        }
        if (isset($map['FirstEvaluationStarted'])) {
            $model->firstEvaluationStarted = $map['FirstEvaluationStarted'];
        }
        if (isset($map['LastSuccessfulInvocationTimestamp'])) {
            $model->lastSuccessfulInvocationTimestamp = $map['LastSuccessfulInvocationTimestamp'];
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

        return $model;
    }
}
