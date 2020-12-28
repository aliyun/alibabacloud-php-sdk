<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateDegradeRuleRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;

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
        'namespace'                 => 'Namespace',
        'appName'                   => 'AppName',
        'resource'                  => 'Resource',
        'strategy'                  => 'Strategy',
        'threshold'                 => 'Threshold',
        'enable'                    => 'Enable',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
     * @return CreateDegradeRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
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
