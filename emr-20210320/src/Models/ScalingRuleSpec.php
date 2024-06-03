<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byLoadScalingRuleSpec;
use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleSpec\byTimeScalingRuleSpec;
use AlibabaCloud\Tea\Model;

class ScalingRuleSpec extends Model
{
    /**
     * @description 调整值。需要为正数，代表需要扩容或者缩容的实例数量。
     *
     * This parameter is required.
     * @example 100
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description 按照负载伸缩描述。
     *
     * @var byLoadScalingRuleSpec
     */
    public $byLoadScalingRuleSpec;

    /**
     * @description 按照时间伸缩描述。
     *
     * @var byTimeScalingRuleSpec
     */
    public $byTimeScalingRuleSpec;

    /**
     * @description 冷却时间。单位为秒，取值范围在30~10800秒之间。
     *
     * This parameter is required.
     * @example 60
     *
     * @var int
     */
    public $coolDownInterval;

    /**
     * @description 伸缩活动类型。
     *
     * This parameter is required.
     * @example SCALE_IN
     *
     * @var string
     */
    public $scalingActivityType;

    /**
     * @description 规则名称。
     *
     * This parameter is required.
     * @example scale-out-memory
     *
     * @var string
     */
    public $scalingRuleName;

    /**
     * @description 伸缩规则类型。
     *
     * This parameter is required.
     * @example BY_TIME
     *
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
