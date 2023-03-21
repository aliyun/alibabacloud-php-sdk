<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyInterceptionRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var mixed[]
     */
    public $dstTarget;

    /**
     * @var int
     */
    public $interceptType;

    /**
     * @var int
     */
    public $orderIndex;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleSwitch;

    /**
     * @var mixed[]
     */
    public $srcTarget;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'dstTarget'     => 'DstTarget',
        'interceptType' => 'InterceptType',
        'orderIndex'    => 'OrderIndex',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
        'ruleSwitch'    => 'RuleSwitch',
        'srcTarget'     => 'SrcTarget',
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
        if (null !== $this->dstTarget) {
            $res['DstTarget'] = $this->dstTarget;
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
        if (null !== $this->srcTarget) {
            $res['SrcTarget'] = $this->srcTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInterceptionRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DstTarget'])) {
            $model->dstTarget = $map['DstTarget'];
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
            $model->srcTarget = $map['SrcTarget'];
        }

        return $model;
    }
}
