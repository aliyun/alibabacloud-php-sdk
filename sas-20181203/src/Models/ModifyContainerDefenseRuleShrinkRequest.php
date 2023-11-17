<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyContainerDefenseRuleShrinkRequest\scope;
use AlibabaCloud\Tea\Model;

class ModifyContainerDefenseRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @example 123
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example text-001
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
     * @example 1
     *
     * @var int
     */
    public $ruleType;

    /**
     * @var scope[]
     */
    public $scope;

    /**
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
     * @return ModifyContainerDefenseRuleShrinkRequest
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
