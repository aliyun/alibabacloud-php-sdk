<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateCircuitBreakerRuleRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example hkhon1po62@c3df23522bXXXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 5
     *
     * @var int
     */
    public $halfOpenBaseAmountPerStep;

    /**
     * @example 1
     *
     * @var int
     */
    public $halfOpenRecoveryStepNum;

    /**
     * @example 200
     *
     * @var int
     */
    public $maxAllowedRtMs;

    /**
     * @example 10
     *
     * @var int
     */
    public $minRequestAmount;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 10000
     *
     * @var int
     */
    public $retryTimeoutMs;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example 20000
     *
     * @var int
     */
    public $statIntervalMs;

    /**
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage'            => 'AcceptLanguage',
        'appId'                     => 'AppId',
        'appName'                   => 'AppName',
        'enable'                    => 'Enable',
        'halfOpenBaseAmountPerStep' => 'HalfOpenBaseAmountPerStep',
        'halfOpenRecoveryStepNum'   => 'HalfOpenRecoveryStepNum',
        'maxAllowedRtMs'            => 'MaxAllowedRtMs',
        'minRequestAmount'          => 'MinRequestAmount',
        'namespace'                 => 'Namespace',
        'retryTimeoutMs'            => 'RetryTimeoutMs',
        'ruleId'                    => 'RuleId',
        'statIntervalMs'            => 'StatIntervalMs',
        'strategy'                  => 'Strategy',
        'threshold'                 => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->halfOpenBaseAmountPerStep) {
            $res['HalfOpenBaseAmountPerStep'] = $this->halfOpenBaseAmountPerStep;
        }
        if (null !== $this->halfOpenRecoveryStepNum) {
            $res['HalfOpenRecoveryStepNum'] = $this->halfOpenRecoveryStepNum;
        }
        if (null !== $this->maxAllowedRtMs) {
            $res['MaxAllowedRtMs'] = $this->maxAllowedRtMs;
        }
        if (null !== $this->minRequestAmount) {
            $res['MinRequestAmount'] = $this->minRequestAmount;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->retryTimeoutMs) {
            $res['RetryTimeoutMs'] = $this->retryTimeoutMs;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->statIntervalMs) {
            $res['StatIntervalMs'] = $this->statIntervalMs;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCircuitBreakerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['HalfOpenBaseAmountPerStep'])) {
            $model->halfOpenBaseAmountPerStep = $map['HalfOpenBaseAmountPerStep'];
        }
        if (isset($map['HalfOpenRecoveryStepNum'])) {
            $model->halfOpenRecoveryStepNum = $map['HalfOpenRecoveryStepNum'];
        }
        if (isset($map['MaxAllowedRtMs'])) {
            $model->maxAllowedRtMs = $map['MaxAllowedRtMs'];
        }
        if (isset($map['MinRequestAmount'])) {
            $model->minRequestAmount = $map['MinRequestAmount'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RetryTimeoutMs'])) {
            $model->retryTimeoutMs = $map['RetryTimeoutMs'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['StatIntervalMs'])) {
            $model->statIntervalMs = $map['StatIntervalMs'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
