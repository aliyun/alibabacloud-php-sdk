<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyInterceptionRuleShrinkRequest extends Model
{
    /**
     * @example c17ef568f81884cdab402decd5fcd****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example {"targetId":600069,"ports":["80/8088"]}
     *
     * @var string
     */
    public $dstTargetShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $interceptType;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @example 500018
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example tetsRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @example {"targetId":400989}
     *
     * @var string
     */
    public $srcTargetShrink;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'dstTargetShrink' => 'DstTarget',
        'interceptType'   => 'InterceptType',
        'orderIndex'      => 'OrderIndex',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'ruleSwitch'      => 'RuleSwitch',
        'srcTargetShrink' => 'SrcTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dstTargetShrink) {
            $res['DstTarget'] = $this->dstTargetShrink;
        }
        if (null !== $this->interceptType) {
            $res['InterceptType'] = $this->interceptType;
        }
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->srcTargetShrink) {
            $res['SrcTarget'] = $this->srcTargetShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInterceptionRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DstTarget'])) {
            $model->dstTargetShrink = $map['DstTarget'];
        }
        if (isset($map['InterceptType'])) {
            $model->interceptType = $map['InterceptType'];
        }
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['SrcTarget'])) {
            $model->srcTargetShrink = $map['SrcTarget'];
        }

        return $model;
    }
}
