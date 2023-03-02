<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The strength of the monitoring rule. The strength of a monitoring rule indicates the importance of the rule. Valid values:
     *
     *   1: indicates that the monitoring rule is a strong rule.
     *
     *   0: indicates that the monitoring rule is a weak rule.
     *
     * You can specify whether a monitoring rule is a strong rule based on your business requirements. If a strong rule is used and an error alert is triggered, nodes are blocked.
     * @example 1
     *
     * @var int
     */
    public $blockType;

    /**
     * @description The ID of the checker. The value of this parameter corresponds to the ID at the frontend and is converted from the ID of the primary key.
     *
     * @example 9
     *
     * @var int
     */
    public $checker;

    /**
     * @description The name of the checker.
     *
     * @example compared with a fixed value
     *
     * @var string
     */
    public $checkerName;

    /**
     * @description The description of the monitoring rule.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The threshold for an error alert. The threshold indicates the deviation of the monitoring result from the expected value. You can customize this threshold based on your business requirements. If a strong rule is used and an error alert is triggered, nodes are blocked.
     *
     * @example 20
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @description The ID of the partition filter expression.
     *
     * @example 165523
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The expected value.
     *
     * @example 30
     *
     * @var string
     */
    public $expectValue;

    /**
     * @description Indicates whether the monitoring is performed based on a fixed value.
     *
     * @example true
     *
     * @var bool
     */
    public $fixCheck;

    /**
     * @description The ID of the monitoring rule.
     *
     * @example 123232
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the sampling method of the monitoring rule.
     *
     * @example 8
     *
     * @var int
     */
    public $methodId;

    /**
     * @description The name of the method that is used to collect sample data, such as avg, count, sum, min, max, count_distinct, user_defined, table_count, table_size, table_dt_load_count, table_dt_refuseload_count, null_value, null_value/table_count, (table_count-count_distinct)/table_count, or table_count-count_distinct.
     *
     * @example table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @description The ID of the Alibaba Cloud account that is used to configure the monitoring rule.
     *
     * @example 1822931****
     *
     * @var string
     */
    public $onDuty;

    /**
     * @description The name of the Alibaba Cloud account that is used to configure the monitoring rule.
     *
     * @example test
     *
     * @var string
     */
    public $onDutyAccountName;

    /**
     * @var bool
     */
    public $openSwitch;

    /**
     * @description The comparison operator of the monitoring rule.
     *
     * @example >=
     *
     * @var string
     */
    public $operator;

    /**
     * @description Indicates whether the threshold is a dynamic threshold. Valid values:
     *
     *   0: The threshold is not a dynamic threshold.
     *   1: The threshold is a dynamic threshold.
     *
     * @example 0
     *
     * @var int
     */
    public $predictType;

    /**
     * @description The field that is monitored. This field is a column name in the data source table that is monitored.
     *
     * @example id
     *
     * @var string
     */
    public $property;

    /**
     * @description The name of the monitoring rule.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the monitoring rule.
     *
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The ID of the monitoring template.
     *
     * @example 7
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The name of the monitoring template.
     *
     * @example SQL task table rows, 1,7, 30 days fluctuation test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The trend of the monitoring result.
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
     * @description The filter condition or custom SQL statement that is used for monitoring.
     *
     * @example id>10
     *
     * @var string
     */
    public $whereCondition;
    protected $_name = [
        'blockType'         => 'BlockType',
        'checker'           => 'Checker',
        'checkerName'       => 'CheckerName',
        'comment'           => 'Comment',
        'criticalThreshold' => 'CriticalThreshold',
        'entityId'          => 'EntityId',
        'expectValue'       => 'ExpectValue',
        'fixCheck'          => 'FixCheck',
        'id'                => 'Id',
        'methodId'          => 'MethodId',
        'methodName'        => 'MethodName',
        'onDuty'            => 'OnDuty',
        'onDutyAccountName' => 'OnDutyAccountName',
        'openSwitch'        => 'OpenSwitch',
        'operator'          => 'Operator',
        'predictType'       => 'PredictType',
        'property'          => 'Property',
        'ruleName'          => 'RuleName',
        'ruleType'          => 'RuleType',
        'templateId'        => 'TemplateId',
        'templateName'      => 'TemplateName',
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
        if (null !== $this->checkerName) {
            $res['CheckerName'] = $this->checkerName;
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
        if (null !== $this->fixCheck) {
            $res['FixCheck'] = $this->fixCheck;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->methodId) {
            $res['MethodId'] = $this->methodId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->onDuty) {
            $res['OnDuty'] = $this->onDuty;
        }
        if (null !== $this->onDutyAccountName) {
            $res['OnDutyAccountName'] = $this->onDutyAccountName;
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
        if (null !== $this->property) {
            $res['Property'] = $this->property;
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
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
     * @return data
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
        if (isset($map['CheckerName'])) {
            $model->checkerName = $map['CheckerName'];
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
        if (isset($map['FixCheck'])) {
            $model->fixCheck = $map['FixCheck'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MethodId'])) {
            $model->methodId = $map['MethodId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['OnDuty'])) {
            $model->onDuty = $map['OnDuty'];
        }
        if (isset($map['OnDutyAccountName'])) {
            $model->onDutyAccountName = $map['OnDutyAccountName'];
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
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
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
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
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
