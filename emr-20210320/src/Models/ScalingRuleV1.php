<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ScalingRuleV1\ruleParam;
use AlibabaCloud\Tea\Model;

class ScalingRuleV1 extends Model
{
    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var int
     */
    public $coolDownTime;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var ruleParam
     */
    public $ruleParam;

    /**
     * @var string
     */
    public $ruleType;

    /**
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
