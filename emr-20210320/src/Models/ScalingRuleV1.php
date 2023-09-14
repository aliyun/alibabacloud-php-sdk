<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleV1\ruleParam;
use AlibabaCloud\Tea\Model;

class ScalingRuleV1 extends Model
{
    /**
     * @description 调整类型。
     *
     * @example QUANTITY_CHANGE_IN_CAPACITY
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @description 调整值,正数为扩容,负数为缩容。
     *
     * @example 1
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @description 冷却时间,单位秒。
     *
     * @example 4
     *
     * @var int
     */
    public $coolDownTime;

    /**
     * @description 规则名称。
     *
     * @example tule1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 规则参数。
     *
     * @var ruleParam
     */
    public $ruleParam;

    /**
     * @description 规则类型。
     *
     * @example BY_LOAD
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description 弹性规则配置ID。
     *
     * @example SCB-DCD96BCCFED1****
     *
     * @var string
     */
    public $scalingConfigBizId;
    protected $_name = [
        'adjustmentType'     => 'AdjustmentType',
        'adjustmentValue'    => 'AdjustmentValue',
        'coolDownTime'       => 'CoolDownTime',
        'ruleName'           => 'RuleName',
        'ruleParam'          => 'RuleParam',
        'ruleType'           => 'RuleType',
        'scalingConfigBizId' => 'ScalingConfigBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->coolDownTime) {
            $res['CoolDownTime'] = $this->coolDownTime;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleParam) {
            $res['RuleParam'] = null !== $this->ruleParam ? $this->ruleParam->toMap() : null;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->scalingConfigBizId) {
            $res['ScalingConfigBizId'] = $this->scalingConfigBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScalingRuleV1
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['CoolDownTime'])) {
            $model->coolDownTime = $map['CoolDownTime'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleParam'])) {
            $model->ruleParam = ruleParam::fromMap($map['RuleParam']);
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['ScalingConfigBizId'])) {
            $model->scalingConfigBizId = $map['ScalingConfigBizId'];
        }

        return $model;
    }
}
