<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule;

use AlibabaCloud\Tea\Model;

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
        'firstActivatedTimestamp'           => 'FirstActivatedTimestamp',
        'firstEvaluationStarted'            => 'FirstEvaluationStarted',
        'lastErrorCode'                     => 'LastErrorCode',
        'lastErrorMessage'                  => 'LastErrorMessage',
        'lastFailedEvaluationTimestamp'     => 'LastFailedEvaluationTimestamp',
        'lastFailedInvocationTimestamp'     => 'LastFailedInvocationTimestamp',
        'lastSuccessfulEvaluationTimestamp' => 'LastSuccessfulEvaluationTimestamp',
        'lastSuccessfulInvocationTimestamp' => 'LastSuccessfulInvocationTimestamp',
    ];

    public function validate()
    {
        Model::validateRequired('firstActivatedTimestamp', $this->firstActivatedTimestamp, true);
        Model::validateRequired('firstEvaluationStarted', $this->firstEvaluationStarted, true);
        Model::validateRequired('lastErrorCode', $this->lastErrorCode, true);
        Model::validateRequired('lastErrorMessage', $this->lastErrorMessage, true);
        Model::validateRequired('lastFailedEvaluationTimestamp', $this->lastFailedEvaluationTimestamp, true);
        Model::validateRequired('lastFailedInvocationTimestamp', $this->lastFailedInvocationTimestamp, true);
        Model::validateRequired('lastSuccessfulEvaluationTimestamp', $this->lastSuccessfulEvaluationTimestamp, true);
        Model::validateRequired('lastSuccessfulInvocationTimestamp', $this->lastSuccessfulInvocationTimestamp, true);
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return configRuleEvaluationStatus
     */
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
