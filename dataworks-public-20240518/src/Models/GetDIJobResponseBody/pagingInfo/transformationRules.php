<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDIJobResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class transformationRules extends Model
{
    /**
     * @description The action type. Valid values:
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
     * @description The expression of the rule. The expression is a JSON string.
     *
     * If no rule of this type is configured, the default processing policy for messages generated for insert, update, and delete operations is Normal. dmlType: the DML operation. Valid values: Insert, Update, and Delete. dmlAction: the processing policy for DML messages. Valid values: Normal, Ignore, Filter, and LogicalDelete. Filter indicates conditional processing. The value Filter is returned for the dmlAction parameter only when the value of the dmlType parameter is Update or Delete. filterCondition: the condition used to filter DML messages. This parameter is returned only when the value of the dmlAction parameter is Filter.
     * @example {"expression":"${srcDatasoureName}_${srcDatabaseName}"}
     *
     * @var string
     */
    public $ruleExpression;

    /**
     * @description The name of the rule. If the values of the RuleActionType parameter and the RuleTargetType parameter are the same for multiple transformation rules, you must make sure that the transformation rule names are unique.
     *
     * @example rename_rule_1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the object on which the action is performed. Valid values:
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
        'ruleExpression' => 'RuleExpression',
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
        if (null !== $this->ruleExpression) {
            $res['RuleExpression'] = $this->ruleExpression;
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
        if (isset($map['RuleExpression'])) {
            $model->ruleExpression = $map['RuleExpression'];
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
