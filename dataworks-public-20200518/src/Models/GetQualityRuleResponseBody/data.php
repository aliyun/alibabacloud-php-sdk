<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetQualityRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $blockType;

    /**
     * @example 9
     *
     * @var int
     */
    public $checker;

    /**
     * @example compared with a fixed value
     *
     * @var string
     */
    public $checkerName;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 20
     *
     * @var string
     */
    public $criticalThreshold;

    /**
     * @example 165523
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 30
     *
     * @var string
     */
    public $expectValue;

    /**
     * @example true
     *
     * @var bool
     */
    public $fixCheck;

    /**
     * @example 123232
     *
     * @var int
     */
    public $id;

    /**
     * @example 8
     *
     * @var int
     */
    public $methodId;

    /**
     * @example table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @example 1822931****
     *
     * @var string
     */
    public $onDuty;

    /**
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
     * @example >=
     *
     * @var string
     */
    public $operator;

    /**
     * @example 0
     *
     * @var int
     */
    public $predictType;

    /**
     * @example id
     *
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleType;

    /**
     * @example 7
     *
     * @var int
     */
    public $templateId;

    /**
     * @example SQL task table rows, 1,7, 30 days fluctuation test
     *
     * @var string
     */
    public $templateName;

    /**
     * @example abs
     *
     * @var string
     */
    public $trend;

    /**
     * @example 10
     *
     * @var string
     */
    public $warningThreshold;

    /**
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
