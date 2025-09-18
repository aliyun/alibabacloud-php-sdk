<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byLoadScalingRuleSpec;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byTimeScalingRuleSpec;

class ScalingRuleSpec extends Model
{
    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var byLoadScalingRuleSpec
     */
    public $byLoadScalingRuleSpec;

    /**
     * @var byTimeScalingRuleSpec
     */
    public $byTimeScalingRuleSpec;

    /**
     * @var int
     */
    public $coolDownInterval;

    /**
     * @var string
     */
    public $scalingActivityType;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var string
     */
    public $scalingRuleType;
    protected $_name = [
        'adjustmentValue' => 'AdjustmentValue',
        'byLoadScalingRuleSpec' => 'ByLoadScalingRuleSpec',
        'byTimeScalingRuleSpec' => 'ByTimeScalingRuleSpec',
        'coolDownInterval' => 'CoolDownInterval',
        'scalingActivityType' => 'ScalingActivityType',
        'scalingRuleName' => 'ScalingRuleName',
        'scalingRuleType' => 'ScalingRuleType',
    ];

    public function validate()
    {
        if (null !== $this->byLoadScalingRuleSpec) {
            $this->byLoadScalingRuleSpec->validate();
        }
        if (null !== $this->byTimeScalingRuleSpec) {
            $this->byTimeScalingRuleSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }

        if (null !== $this->byLoadScalingRuleSpec) {
            $res['ByLoadScalingRuleSpec'] = null !== $this->byLoadScalingRuleSpec ? $this->byLoadScalingRuleSpec->toArray($noStream) : $this->byLoadScalingRuleSpec;
        }

        if (null !== $this->byTimeScalingRuleSpec) {
            $res['ByTimeScalingRuleSpec'] = null !== $this->byTimeScalingRuleSpec ? $this->byTimeScalingRuleSpec->toArray($noStream) : $this->byTimeScalingRuleSpec;
        }

        if (null !== $this->coolDownInterval) {
            $res['CoolDownInterval'] = $this->coolDownInterval;
        }

        if (null !== $this->scalingActivityType) {
            $res['ScalingActivityType'] = $this->scalingActivityType;
        }

        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
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
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }

        if (isset($map['ByLoadScalingRuleSpec'])) {
            $model->byLoadScalingRuleSpec = byLoadScalingRuleSpec::fromMap($map['ByLoadScalingRuleSpec']);
        }

        if (isset($map['ByTimeScalingRuleSpec'])) {
            $model->byTimeScalingRuleSpec = byTimeScalingRuleSpec::fromMap($map['ByTimeScalingRuleSpec']);
        }

        if (isset($map['CoolDownInterval'])) {
            $model->coolDownInterval = $map['CoolDownInterval'];
        }

        if (isset($map['ScalingActivityType'])) {
            $model->scalingActivityType = $map['ScalingActivityType'];
        }

        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        if (isset($map['ScalingRuleType'])) {
            $model->scalingRuleType = $map['ScalingRuleType'];
        }

        return $model;
    }
}
