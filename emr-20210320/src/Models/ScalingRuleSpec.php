<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byLoadScalingRuleSpec;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byTimeScalingRuleSpec;
use AlibabaCloud\Tea\Model;

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
        'adjustmentValue'       => 'AdjustmentValue',
        'byLoadScalingRuleSpec' => 'ByLoadScalingRuleSpec',
        'byTimeScalingRuleSpec' => 'ByTimeScalingRuleSpec',
        'coolDownInterval'      => 'CoolDownInterval',
        'scalingActivityType'   => 'ScalingActivityType',
        'scalingRuleName'       => 'ScalingRuleName',
        'scalingRuleType'       => 'ScalingRuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->byLoadScalingRuleSpec) {
            $res['ByLoadScalingRuleSpec'] = null !== $this->byLoadScalingRuleSpec ? $this->byLoadScalingRuleSpec->toMap() : null;
        }
        if (null !== $this->byTimeScalingRuleSpec) {
            $res['ByTimeScalingRuleSpec'] = null !== $this->byTimeScalingRuleSpec ? $this->byTimeScalingRuleSpec->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return ScalingRuleSpec
     */
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
