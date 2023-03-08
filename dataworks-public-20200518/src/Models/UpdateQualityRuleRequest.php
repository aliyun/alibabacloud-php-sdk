<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateQualityRuleRequest extends Model
{
    /**
     * @description The strength of the monitoring rule. The strength of a monitoring rule indicates the importance of the rule. Valid values:
     *
     *   1: indicates that the monitoring rule is a strong rule.
     *
     *   0: indicates that the monitoring rule is a weak rule.
     *
     * You can specify whether a monitoring rule is a strong rule based on your business requirements. If a strong rule is used and a critical alert is triggered, nodes are blocked.
     * @example 0
     *
     * @var int
     */
    public $blockType;

    /**
     * @description The ID of the checker. You can call the [ListQualityRules](~~173995~~) operation to obtain the ID of the checker.
     *
     * @example 9
     *
     * @var int
     */
    public $checker;

    /**
     * @description The description of the monitoring rule.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The threshold for a critical alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements. If a strong rule is used and an error alert is triggered, nodes are blocked.
     *
     * @example 10
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @description The ID of the partition filter expression. You can call the [GetQualityEntity](~~173995~~) operation to obtain the ID of the partition filter expression.
     *
     * @example 123
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The expected value of the monitoring result.
     *
     * @example 300
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description The ID of the monitoring rule. You can call the [ListQualityRules](~~173995~~) operation to obtain the ID of the monitoring rule.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The method that is used to collect sample data, such as avg, count, sum, min, max, count_distinct, user_defined, table_count, table_size, table_dt_load_count, table_dt_refuseload_count, null_value, null_value/table_count, (table_count-count_distinct)/table_count, or table_count-count_distinct.
     *
     * @example table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @description Specifies whether to enable the monitoring rule in the production environment.
     *
     *   true: The monitoring rule is triggered when the associated auto triggered node that generates the output data starts to run.
     *   false: The monitoring rule is not triggered when the associated auto triggered node that generates the output data starts to run.
     *
     * @example true
     *
     * @var bool
     */
    public $openSwitch;

    /**
     * @description The comparison operator, such as >, >=, =, ≠, <, or <=.
     *
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description Specifies whether the threshold is a dynamic threshold. Valid values:
     *
     *   0: indicates that the threshold is not a dynamic threshold.
     *   2: indicates that the threshold is a dynamic threshold.
     *
     * @example 0
     *
     * @var int
     */
    public $predictType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine instance or data source. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace Management page to obtain the name.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The name of the field to be monitored.
     *
     * @example id
     *
     * @var string
     */
    public $property;

    /**
     * @description The data type of the field.
     *
     * @example bigint
     *
     * @var string
     */
    public $propertyType;

    /**
     * @description The name of the monitoring rule.
     *
     * @example 123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the monitoring rule. Valid values:
     *
     *   0: The monitoring rule is created by the system.
     *   1: The monitoring rule is created by a user.
     *   2: The monitoring rule is a workspace-level rule.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The ID of the monitoring template. You can call the [ListQualityRules](~~173995~~) operation to obtain the ID of the monitoring template that is used to create the monitoring rule.
     *
     * @example 7
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The trend of the monitoring result. Valid values:
     *
     *   up: increasing
     *   down: decreasing
     *   abs: absolute value
     *
     * @example up
     *
     * @var string
     */
    public $trend;

    /**
     * @description The threshold for a warning alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements.
     *
     * @example 5
     *
     * @var string
     */
    public $warningThreshold;

    /**
     * @description The filter condition or custom SQL statement that is used for monitoring.
     *
     * @example dt=$[yyyymmdd]
     *
     * @var string
     */
    public $whereCondition;
    protected $_name = [
        'blockType'         => 'BlockType',
        'checker'           => 'Checker',
        'comment'           => 'Comment',
        'criticalThreshold' => 'CriticalThreshold',
        'entityId'          => 'EntityId',
        'expectValue'       => 'ExpectValue',
        'id'                => 'Id',
        'methodName'        => 'MethodName',
        'openSwitch'        => 'OpenSwitch',
        'operator'          => 'Operator',
        'predictType'       => 'PredictType',
        'projectId'         => 'ProjectId',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'propertyType'      => 'PropertyType',
        'ruleName'          => 'RuleName',
        'ruleType'          => 'RuleType',
        'templateId'        => 'TemplateId',
        'trend'             => 'Trend',
        'warningThreshold'  => 'WarningThreshold',
        'whereCondition'    => 'WhereCondition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->checker) {
            $res['Checker'] = $this->checker;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->criticalThreshold) {
            $res['CriticalThreshold'] = $this->criticalThreshold;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->expectValue) {
            $res['ExpectValue'] = $this->expectValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->openSwitch) {
            $res['OpenSwitch'] = $this->openSwitch;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->propertyType) {
            $res['PropertyType'] = $this->propertyType;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
        }
        if (null !== $this->warningThreshold) {
            $res['WarningThreshold'] = $this->warningThreshold;
        }
        if (null !== $this->whereCondition) {
            $res['WhereCondition'] = $this->whereCondition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['Checker'])) {
            $model->checker = $map['Checker'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CriticalThreshold'])) {
            $model->criticalThreshold = $map['CriticalThreshold'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExpectValue'])) {
            $model->expectValue = $map['ExpectValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['OpenSwitch'])) {
            $model->openSwitch = $map['OpenSwitch'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['PredictType'])) {
            $model->predictType = $map['PredictType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['PropertyType'])) {
            $model->propertyType = $map['PropertyType'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }
        if (isset($map['WarningThreshold'])) {
            $model->warningThreshold = $map['WarningThreshold'];
        }
        if (isset($map['WhereCondition'])) {
            $model->whereCondition = $map['WhereCondition'];
        }

        return $model;
    }
}
