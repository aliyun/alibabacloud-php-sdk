<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ModifyDegradeRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $slowRtMs;

    /**
     * @var int
     */
    public $halfOpenRecoveryStepNum;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $statDurationMs;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $halfOpenBaseAmountPerStep;

    /**
     * @var int
     */
    public $recoveryTimeoutMs;

    /**
     * @var int
     */
    public $minRequestAmount;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'slowRtMs'                  => 'SlowRtMs',
        'halfOpenRecoveryStepNum'   => 'HalfOpenRecoveryStepNum',
        'namespace'                 => 'Namespace',
        'statDurationMs'            => 'StatDurationMs',
        'ruleId'                    => 'RuleId',
        'strategy'                  => 'Strategy',
        'resource'                  => 'Resource',
        'appName'                   => 'AppName',
        'halfOpenBaseAmountPerStep' => 'HalfOpenBaseAmountPerStep',
        'recoveryTimeoutMs'         => 'RecoveryTimeoutMs',
        'minRequestAmount'          => 'MinRequestAmount',
        'threshold'                 => 'Threshold',
        'enable'                    => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowRtMs) {
            $res['SlowRtMs'] = $this->slowRtMs;
        }
        if (null !== $this->halfOpenRecoveryStepNum) {
            $res['HalfOpenRecoveryStepNum'] = $this->halfOpenRecoveryStepNum;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->statDurationMs) {
            $res['StatDurationMs'] = $this->statDurationMs;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->halfOpenBaseAmountPerStep) {
            $res['HalfOpenBaseAmountPerStep'] = $this->halfOpenBaseAmountPerStep;
        }
        if (null !== $this->recoveryTimeoutMs) {
            $res['RecoveryTimeoutMs'] = $this->recoveryTimeoutMs;
        }
        if (null !== $this->minRequestAmount) {
            $res['MinRequestAmount'] = $this->minRequestAmount;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlowRtMs'])) {
            $model->slowRtMs = $map['SlowRtMs'];
        }
        if (isset($map['HalfOpenRecoveryStepNum'])) {
            $model->halfOpenRecoveryStepNum = $map['HalfOpenRecoveryStepNum'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['StatDurationMs'])) {
            $model->statDurationMs = $map['StatDurationMs'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['HalfOpenBaseAmountPerStep'])) {
            $model->halfOpenBaseAmountPerStep = $map['HalfOpenBaseAmountPerStep'];
        }
        if (isset($map['RecoveryTimeoutMs'])) {
            $model->recoveryTimeoutMs = $map['RecoveryTimeoutMs'];
        }
        if (isset($map['MinRequestAmount'])) {
            $model->minRequestAmount = $map['MinRequestAmount'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
