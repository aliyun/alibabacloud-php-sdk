<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateQualityRuleRequest extends Model
{
    /**
     * @example 0
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
     * @example 15224
     *
     * @var int
     */
    public $entityId;

    /**
     * @example 0
     *
     * @var string
     */
    public $expectValue;

    /**
     * @example count/table_count
     *
     * @var string
     */
    public $methodName;

    /**
     * @example >
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
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example table_id
     *
     * @var string
     */
    public $property;

    /**
     * @example bigint
     *
     * @var string
     */
    public $propertyType;

    /**
     * @example 1234
     *
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
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->predictType) {
            $res['PredictType'] = $this->predictType;
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
