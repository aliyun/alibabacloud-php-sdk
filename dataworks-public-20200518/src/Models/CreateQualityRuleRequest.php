<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRuleRequest extends Model
{
    /**
     * @description The strength of the monitoring rule. Valid values: 0 and 1. 0 indicates that the monitoring rule is a weak rule. 1 indicates that the monitoring rule is a strong rule.
     *
     * @example 0
     *
     * @var int
     */
    public $blockType;

    /**
     * @description The ID of the checker.
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
     * @description The threshold for a critical alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements. If a strong rule is used and a critical alert is reported, nodes are blocked.
     *
     * @example 20
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @description The ID of the partition filter expression.
     *
     * @example 15224
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The expected value of the monitoring result.
     *
     * @example 0
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description The method used to collect sample data. If you want to use a custom SQL statement as a sampling method, set this parameter to user_defined.
     *
     * @example count/table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @description The comparison operator of the monitoring rule.
     *
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description Specifies whether the monitoring rule is a dynamic threshold rule. Valid values: 0 and 2. 0 indicates that the monitoring rule is not a dynamic threshold rule. 2 indicates that the monitoring rule is a dynamic threshold rule.
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
     * @description The name of the compute engine instance or data source.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The fields that you want to monitor. If you want to monitor all fields in a table and check the table rows, set this parameter to table_count. If you want to monitor all fields in a table and check the table size, set this parameter to table_size.
     *
     * @example table_id
     *
     * @var string
     */
    public $property;

    /**
     * @description The data type of the fields that you want to monitor. If you want to monitor all fields in a table, set this parameter to table. If you want to monitor only a specific field, set this parameter to bigint.
     *
     * @example bigint
     *
     * @var string
     */
    public $propertyType;

    /**
     * @description The name of the monitoring rule.
     *
     * @example 1234
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the monitoring rule. Valid values: 0, 1, and 2. 0 indicates that the monitoring rule is created by the system. 1 indicates that the monitoring rule is created by a user. 2 indicates that the monitoring rule is a workspace-level rule.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $taskSetting;

    /**
     * @description The ID of the template that is used to create the monitoring rule.
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
     * @example abs
     *
     * @var string
     */
    public $trend;

    /**
     * @description The threshold for a warning alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements.
     *
     * @example 10
     *
     * @var string
     */
    public $warningThreshold;

    /**
     * @description The filter condition or custom SQL statement.
     *
     * @example table_id>1
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
        'methodName'        => 'MethodName',
        'operator'          => 'Operator',
        'predictType'       => 'PredictType',
        'projectId'         => 'ProjectId',
        'projectName'       => 'ProjectName',
        'property'          => 'Property',
        'propertyType'      => 'PropertyType',
        'ruleName'          => 'RuleName',
        'ruleType'          => 'RuleType',
        'taskSetting'       => 'TaskSetting',
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
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
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
        if (null !== $this->taskSetting) {
            $res['TaskSetting'] = $this->taskSetting;
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
     * @return CreateQualityRuleRequest
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
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
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
        if (isset($map['TaskSetting'])) {
            $model->taskSetting = $map['TaskSetting'];
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
