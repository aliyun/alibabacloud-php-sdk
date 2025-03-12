<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyContainerDefenseRuleRequest\scope;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyContainerDefenseRuleRequest\whitelist;
use AlibabaCloud\Tea\Model;

class ModifyContainerDefenseRuleRequest extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example Prevent non-mirror programs from starting in containers
     *
     * @var string
     */
    public $description;

    /**
     * @description The action specified in the rule. Valid values:
     *
     *   **1**: alert
     *   **2**: block
     *
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @description The ID of the rule.
     *
     * >  You can call the [ListContainerDefenseRule](https://help.aliyun.com/document_detail/2590599.html) operation to query the IDs of rules.
     * @example 123
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example text-001
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The type of the rule. Valid values:
     *
     *   1: system rule
     *   2: custom rule
     *
     * @example 1
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The effective scope of the rule.
     *
     * @var scope[]
     */
    public $scope;

    /**
     * @description The whitelist.
     *
     * @var whitelist
     */
    public $whitelist;
    protected $_name = [
        'description' => 'Description',
        'ruleAction'  => 'RuleAction',
        'ruleId'      => 'RuleId',
        'ruleName'    => 'RuleName',
        'ruleSwitch'  => 'RuleSwitch',
        'ruleType'    => 'RuleType',
        'scope'       => 'Scope',
        'whitelist'   => 'Whitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
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
        if (null !== $this->scope) {
            $res['Scope'] = [];
            if (null !== $this->scope && \is_array($this->scope)) {
                $n = 0;
                foreach ($this->scope as $item) {
                    $res['Scope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->whitelist) {
            $res['Whitelist'] = null !== $this->whitelist ? $this->whitelist->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyContainerDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
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
        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n            = 0;
                foreach ($map['Scope'] as $item) {
                    $model->scope[$n++] = null !== $item ? scope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Whitelist'])) {
            $model->whitelist = whitelist::fromMap($map['Whitelist']);
        }

        return $model;
    }
}
