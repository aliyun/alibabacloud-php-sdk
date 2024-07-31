<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateDIJobRequest\tableMappings;

use AlibabaCloud\Tea\Model;

class transformationRules extends Model
{
    /**
     * @description The type of the action. Valid values:
     *
     *   DefinePrimaryKey
     *   Rename
     *   AddColumn
     *   HandleDml
     *   DefineIncrementalCondition
     *   DefineCycleScheduleSettings
     *   DefineRuntimeSettings
     *   DefinePartitionKey
     *
     * @example Rename
     *
     * @var string
     */
    public $ruleActionType;

    /**
     * @description The name of the rule. If the values of the RuleActionType parameter and the RuleTargetType parameter are the same for multiple transformation rules, you must make sure that the transformation rule names are unique.
     *
     * @example rename_rule_1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the object on which you want to perform the action. Valid values:
     *
     *   Table
     *   Schema
     *
     * @example Table
     *
     * @var string
     */
    public $ruleTargetType;
    protected $_name = [
        'ruleActionType' => 'RuleActionType',
        'ruleName'       => 'RuleName',
        'ruleTargetType' => 'RuleTargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleActionType) {
            $res['RuleActionType'] = $this->ruleActionType;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleTargetType) {
            $res['RuleTargetType'] = $this->ruleTargetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transformationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleActionType'])) {
            $model->ruleActionType = $map['RuleActionType'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleTargetType'])) {
            $model->ruleTargetType = $map['RuleTargetType'];
        }

        return $model;
    }
}
