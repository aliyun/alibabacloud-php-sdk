<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail\dstTarget;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail\srcTarget;
use AlibabaCloud\Tea\Model;

class interceptionRuleDetail extends Model
{
    /**
     * @description The destination network object.
     *
     * @var dstTarget
     */
    public $dstTarget;

    /**
     * @description The interception mode. Valid values:
     *
     *   **0**: monitor
     *   **1**: block
     *   **2**: alert
     *   **3**: allow
     *
     * @example 1
     *
     * @var int
     */
    public $interceptType;

    /**
     * @description The priority of the rule. Valid values: 1 to 1000. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @description The ID of the rule.
     *
     * @example 467
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example dmz-frontend-accept
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the defense rule. Valid values:
     *
     *   **1**: The rule is enabled.
     *   **0**: The rule is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **suggest**: a suggestion rule
     *   **customize**: a custom rule
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The source network object.
     *
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
     * @return interceptionRuleDetail
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
