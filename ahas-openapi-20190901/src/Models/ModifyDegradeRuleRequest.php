<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyDegradeRuleRequest extends Model
{
    /**
     * @var int
     */
    public $strategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $recoveryTimeoutMs;

    /**
     * @var int
     */
    public $statDurationMs;

    /**
     * @var int
     */
    public $slowRtMs;

    /**
     * @var int
     */
    public $minRequestAmount;

    /**
     * @var int
     */
    public $halfOpenBaseAmountPerStep;

    /**
     * @var int
     */
    public $halfOpenRecoveryStepNum;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'strategy'                  => 'Strategy',
        'threshold'                 => 'Threshold',
        'ruleId'                    => 'RuleId',
        'recoveryTimeoutMs'         => 'RecoveryTimeoutMs',
        'statDurationMs'            => 'StatDurationMs',
        'slowRtMs'                  => 'SlowRtMs',
        'minRequestAmount'          => 'MinRequestAmount',
        'halfOpenBaseAmountPerStep' => 'HalfOpenBaseAmountPerStep',
        'halfOpenRecoveryStepNum'   => 'HalfOpenRecoveryStepNum',
        'ahasRegionId'              => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->recoveryTimeoutMs) {
            $res['RecoveryTimeoutMs'] = $this->recoveryTimeoutMs;
        }
        if (null !== $this->statDurationMs) {
            $res['StatDurationMs'] = $this->statDurationMs;
        }
        if (null !== $this->slowRtMs) {
            $res['SlowRtMs'] = $this->slowRtMs;
        }
        if (null !== $this->minRequestAmount) {
            $res['MinRequestAmount'] = $this->minRequestAmount;
        }
        if (null !== $this->halfOpenBaseAmountPerStep) {
            $res['HalfOpenBaseAmountPerStep'] = $this->halfOpenBaseAmountPerStep;
        }
        if (null !== $this->halfOpenRecoveryStepNum) {
            $res['HalfOpenRecoveryStepNum'] = $this->halfOpenRecoveryStepNum;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDegradeRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RecoveryTimeoutMs'])) {
            $model->recoveryTimeoutMs = $map['RecoveryTimeoutMs'];
        }
        if (isset($map['StatDurationMs'])) {
            $model->statDurationMs = $map['StatDurationMs'];
        }
        if (isset($map['SlowRtMs'])) {
            $model->slowRtMs = $map['SlowRtMs'];
        }
        if (isset($map['MinRequestAmount'])) {
            $model->minRequestAmount = $map['MinRequestAmount'];
        }
        if (isset($map['HalfOpenBaseAmountPerStep'])) {
            $model->halfOpenBaseAmountPerStep = $map['HalfOpenBaseAmountPerStep'];
        }
        if (isset($map['HalfOpenRecoveryStepNum'])) {
            $model->halfOpenRecoveryStepNum = $map['HalfOpenRecoveryStepNum'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
