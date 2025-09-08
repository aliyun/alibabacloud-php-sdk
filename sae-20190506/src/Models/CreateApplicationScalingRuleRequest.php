<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $enableIdle;

    /**
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;

    /**
     * @var bool
     */
    public $scalingRuleEnable;

    /**
     * @var string
     */
    public $scalingRuleMetric;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var string
     */
    public $scalingRuleTimer;

    /**
     * @var string
     */
    public $scalingRuleType;
    protected $_name = [
        'appId' => 'AppId',
        'enableIdle' => 'EnableIdle',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances' => 'MinReadyInstances',
        'scalingRuleEnable' => 'ScalingRuleEnable',
        'scalingRuleMetric' => 'ScalingRuleMetric',
        'scalingRuleName' => 'ScalingRuleName',
        'scalingRuleTimer' => 'ScalingRuleTimer',
        'scalingRuleType' => 'ScalingRuleType',
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

        if (null !== $this->enableIdle) {
            $res['EnableIdle'] = $this->enableIdle;
        }

        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }

        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }

        if (null !== $this->scalingRuleEnable) {
            $res['ScalingRuleEnable'] = $this->scalingRuleEnable;
        }

        if (null !== $this->scalingRuleMetric) {
            $res['ScalingRuleMetric'] = $this->scalingRuleMetric;
        }

        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }

        if (null !== $this->scalingRuleTimer) {
            $res['ScalingRuleTimer'] = $this->scalingRuleTimer;
        }

        if (null !== $this->scalingRuleType) {
            $res['ScalingRuleType'] = $this->scalingRuleType;
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

        if (isset($map['EnableIdle'])) {
            $model->enableIdle = $map['EnableIdle'];
        }

        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }

        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }

        if (isset($map['ScalingRuleEnable'])) {
            $model->scalingRuleEnable = $map['ScalingRuleEnable'];
        }

        if (isset($map['ScalingRuleMetric'])) {
            $model->scalingRuleMetric = $map['ScalingRuleMetric'];
        }

        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        if (isset($map['ScalingRuleTimer'])) {
            $model->scalingRuleTimer = $map['ScalingRuleTimer'];
        }

        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }

        return $model;
    }
}
