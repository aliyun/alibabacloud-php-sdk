<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\interceptionRuleList\dstTarget;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionRulePageResponseBody\interceptionRuleList\srcTarget;
use AlibabaCloud\Tea\Model;

class interceptionRuleList extends Model
{
    /**
     * @var dstTarget
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
     * @var string
     */
    public $ruleType;

    /**
     * @var srcTarget
     */
    public $srcTarget;
    protected $_name = [
        'dstTarget'     => 'DstTarget',
        'interceptType' => 'InterceptType',
        'orderIndex'    => 'OrderIndex',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
        'ruleSwitch'    => 'RuleSwitch',
        'ruleType'      => 'RuleType',
        'srcTarget'     => 'SrcTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstTarget) {
            $res['DstTarget'] = null !== $this->dstTarget ? $this->dstTarget->toMap() : null;
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
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->srcTarget) {
            $res['SrcTarget'] = null !== $this->srcTarget ? $this->srcTarget->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interceptionRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstTarget'])) {
            $model->dstTarget = dstTarget::fromMap($map['DstTarget']);
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
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SrcTarget'])) {
            $model->srcTarget = srcTarget::fromMap($map['SrcTarget']);
        }

        return $model;
    }
}
