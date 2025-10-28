<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $scalingBehaviour;

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
    public $scalingRuleTrigger;

    /**
     * @var string
     */
    public $scalingRuleType;
    protected $_name = [
        'appId' => 'AppId',
        'scalingBehaviour' => 'ScalingBehaviour',
        'scalingRuleEnable' => 'ScalingRuleEnable',
        'scalingRuleMetric' => 'ScalingRuleMetric',
        'scalingRuleName' => 'ScalingRuleName',
        'scalingRuleTimer' => 'ScalingRuleTimer',
        'scalingRuleTrigger' => 'ScalingRuleTrigger',
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

        if (null !== $this->scalingBehaviour) {
            $res['ScalingBehaviour'] = $this->scalingBehaviour;
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

        if (null !== $this->scalingRuleTrigger) {
            $res['ScalingRuleTrigger'] = $this->scalingRuleTrigger;
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

        if (isset($map['ScalingBehaviour'])) {
            $model->scalingBehaviour = $map['ScalingBehaviour'];
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

        if (isset($map['ScalingRuleTrigger'])) {
            $model->scalingRuleTrigger = $map['ScalingRuleTrigger'];
        }

        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }

        return $model;
    }
}
