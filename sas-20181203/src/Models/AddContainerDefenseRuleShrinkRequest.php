<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddContainerDefenseRuleShrinkRequest\scope;
use AlibabaCloud\Tea\Model;

class AddContainerDefenseRuleShrinkRequest extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example test-proc-defense
     *
     * @var string
     */
    public $description;

    /**
     * @description The action that is performed when the rule is hit. Valid values:
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
     * @description The ID of the rule. You do not need to manually specify the ID.
     *
     * @example 500018
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example auto-test-rule-lt9umq
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The switch of the rule. Valid values:
     *
     *   **0**: off
     *   **1**: on
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The rule type. Valid values:
     *
     *   2: user-defined rules
     *
     * > Only the value 2 is supported.
     * @example 2
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The scope.
     *
     * @var scope[]
     */
    public $scope;

    /**
     * @description The whitelist.
     *
     * @var string
     */
    public $whitelistShrink;
    protected $_name = [
        'description'     => 'Description',
        'ruleAction'      => 'RuleAction',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'ruleSwitch'      => 'RuleSwitch',
        'ruleType'        => 'RuleType',
        'scope'           => 'Scope',
        'whitelistShrink' => 'Whitelist',
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
        if (null !== $this->whitelistShrink) {
            $res['Whitelist'] = $this->whitelistShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddContainerDefenseRuleShrinkRequest
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
            $model->whitelistShrink = $map['Whitelist'];
        }

        return $model;
    }
}
