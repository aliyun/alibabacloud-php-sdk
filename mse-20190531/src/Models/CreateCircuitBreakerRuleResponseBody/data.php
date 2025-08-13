<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateCircuitBreakerRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $halfOpenBaseAmountPerStep;

    /**
     * @var int
     */
    public $halfOpenRecoveryStepNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $maxAllowedRtMs;

    /**
     * @var int
     */
    public $minRequestAmount;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $retryTimeoutMs;

    /**
     * @var int
     */
    public $statIntervalMs;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'enable' => 'Enable',
        'halfOpenBaseAmountPerStep' => 'HalfOpenBaseAmountPerStep',
        'halfOpenRecoveryStepNum' => 'HalfOpenRecoveryStepNum',
        'id' => 'Id',
        'maxAllowedRtMs' => 'MaxAllowedRtMs',
        'minRequestAmount' => 'MinRequestAmount',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'retryTimeoutMs' => 'RetryTimeoutMs',
        'statIntervalMs' => 'StatIntervalMs',
        'strategy' => 'Strategy',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->retryTimeoutMs) {
            $res['RetryTimeoutMs'] = $this->retryTimeoutMs;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['RetryTimeoutMs'])) {
            $model->retryTimeoutMs = $map['RetryTimeoutMs'];
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
